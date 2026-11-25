(() => {
	'use strict';

	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
	const locales = {
		'pt-BR': {
			timeline: 'Marcos da carreira', styles: 'Artes marciais',
			previous: 'Marco anterior', next: 'Próximo marco',
			submit: 'Ver resultado', retry: 'Refazer quiz',
			missing: 'Responda a todas as perguntas para ver seu resultado.',
			score: (correct, total) => `Você acertou ${correct} de ${total} perguntas.`
		},
		en: {
			timeline: 'Career milestones', styles: 'Martial arts',
			previous: 'Previous milestone', next: 'Next milestone',
			submit: 'See results', retry: 'Try again',
			missing: 'Answer all questions to see your results.',
			score: (correct, total) => `You answered ${correct} out of ${total} questions correctly.`
		}
	};

	function button(text) {
		const element = document.createElement('button');
		element.type = 'button';
		element.textContent = text;
		return element;
	}

	// Keep authored content visible until the corresponding controls are ready.
	function setupPanels(section, labels, isTabs) {
		const panels = [...section.querySelectorAll(':scope > .spider-card')];
		const titles = panels.map(panel => panel.querySelector('h3'));
		if (!section.id || panels.length < 2 || titles.some(title => !title)) return;

		const controls = document.createElement('div');
		controls.className = 'spider-controls';
		controls.setAttribute('role', isTabs ? 'tablist' : 'group');
		controls.setAttribute('aria-label', isTabs ? labels.styles : labels.timeline);
		const choices = titles.map((title, index) => {
			const label = isTabs ? title.textContent.trim() : panels[index].querySelector('.spider-kicker')?.textContent.trim();
			const choice = button(label || title.textContent.trim());
			choice.id = `${section.id}-control-${index}`;
			panels[index].id = `${section.id}-panel-${index}`;
			choice.setAttribute('aria-controls', panels[index].id);
			if (isTabs) {
				choice.setAttribute('role', 'tab');
				panels[index].setAttribute('role', 'tabpanel');
				panels[index].setAttribute('aria-labelledby', choice.id);
				panels[index].tabIndex = 0;
			}
			controls.append(choice);
			return choice;
		});
		let current = 0;
		const announcement = document.createElement('p');
		announcement.className = 'spider-spoken';
		announcement.setAttribute('role', 'status');

		function select(index, moveFocus = false) {
			current = (index + choices.length) % choices.length;
			choices.forEach((choice, at) => {
				const active = at === current;
				panels[at].hidden = !active;
				if (isTabs) {
					choice.setAttribute('aria-selected', String(active));
					choice.tabIndex = active ? 0 : -1;
				} else {
					choice.setAttribute('aria-current', active ? 'step' : 'false');
				}
			});
			if (moveFocus) choices[current].focus();
		}

		choices.forEach((choice, index) => {
			choice.addEventListener('click', () => select(index));
			choice.addEventListener('keydown', event => {
				const destinations = { ArrowLeft: index - 1, ArrowRight: index + 1, Home: 0, End: choices.length - 1 };
				if (!Object.hasOwn(destinations, event.key)) return;
				event.preventDefault();
				select(destinations[event.key], true);
			});
		});

		panels[0].before(controls);
		if (!isTabs) {
			const navigation = document.createElement('div');
			navigation.className = 'spider-controls';
			const previous = button(labels.previous);
			const next = button(labels.next);
			function step(offset) {
				select(current + offset);
				announcement.textContent = `${choices[current].textContent} · ${titles[current].textContent}`;
			}
			previous.addEventListener('click', () => step(-1));
			next.addEventListener('click', () => step(1));
			navigation.append(previous, next);
			panels.at(-1).after(navigation, announcement);
		}
		select(0);
	}

	function setupCounters(root) {
		if (!('IntersectionObserver' in window) || reducedMotion.matches) return;
		const observer = new IntersectionObserver(entries => {
			for (const { target, isIntersecting } of entries) {
				if (!isIntersecting) continue;
				observer.unobserve(target);
				const visual = target.querySelector('[aria-hidden="true"]');
				const total = Number(visual.textContent);
				if (reducedMotion.matches) continue;
				let start;
				function frame(time) {
					start ??= time;
					const progress = reducedMotion.matches ? 1 : Math.min((time - start) / 750, 1);
					visual.textContent = String(Math.round(total * progress));
					if (progress < 1) requestAnimationFrame(frame);
				}
				requestAnimationFrame(frame);
			}
		});
		for (const value of root.querySelectorAll('.spider-stat strong')) {
			if (!/^\d+$/.test(value.textContent.trim())) continue;
			const spoken = document.createElement('span');
			spoken.className = 'spider-spoken';
			spoken.textContent = value.textContent;
			const visual = document.createElement('span');
			visual.setAttribute('aria-hidden', 'true');
			visual.textContent = value.textContent;
			value.replaceChildren(spoken, visual);
			observer.observe(value);
		}
	}

	function setupQuiz(section, labels) {
		const questions = [...section.querySelectorAll('.spider-question')];
		if (!section.id || !questions.length) return;
		const data = questions.map(question => ({
			title: question.querySelector('h3'),
			answers: [...question.querySelectorAll('li')]
		}));
		if (data.some(({ title, answers }) => !title || answers.filter(answer => answer.classList.contains('spider-correct')).length !== 1)) return;

		const form = document.createElement('form');
		form.className = 'spider-quiz';
		form.noValidate = true;
		const result = document.createElement('output');
		result.setAttribute('aria-live', 'polite');
		result.setAttribute('aria-atomic', 'true');

		const fields = data.map(({ title, answers }, index) => {
			const fieldset = document.createElement('fieldset');
			const legend = document.createElement('legend');
			legend.textContent = title.textContent;
			fieldset.append(legend);
			for (const answer of answers) {
				const label = document.createElement('label');
				const option = document.createElement('input');
				option.type = 'radio';
				option.name = `${section.id}-question-${index}`;
				option.value = answer.classList.contains('spider-correct') ? 'correct' : 'incorrect';
				option.required = true;
				label.append(option, answer.textContent.trim());
				fieldset.append(label);
			}
			form.append(fieldset);
			return fieldset;
		});
		const controls = document.createElement('div');
		controls.className = 'spider-controls';
		const submit = button(labels.submit);
		submit.type = 'submit';
		const retry = button(labels.retry);
		retry.type = 'reset';
		controls.append(submit, retry);
		form.append(controls, result);
		form.addEventListener('submit', event => {
			event.preventDefault();
			const responses = fields.map(field => field.querySelector('input:checked'));
			const missing = responses.indexOf(null);
			if (missing >= 0) {
				result.textContent = labels.missing;
				fields[missing].querySelector('input').focus();
				return;
			}
			result.textContent = labels.score(responses.filter(input => input.value === 'correct').length, fields.length);
		});
		form.addEventListener('change', () => { result.textContent = ''; });
		form.addEventListener('reset', () => {
			result.textContent = '';
			fields[0].querySelector('input').focus();
		});
		questions[0].before(form);
		questions.forEach(question => { question.hidden = true; });
	}

	for (const site of document.querySelectorAll('.spider-site')) {
		const versions = [...site.querySelectorAll('.spider-locale')];
		for (const version of versions) {
			const labels = locales[version.lang];
			if (!labels) continue;
			version.querySelectorAll('.spider-timeline').forEach(section => setupPanels(section, labels, false));
			version.querySelectorAll('.spider-styles').forEach(section => setupPanels(section, labels, true));
			version.querySelectorAll('.spider-quiz-section').forEach(section => setupQuiz(section, labels));
		}

		// Hash links remain valid without JavaScript and support browser history.
		function syncLanguage() {
			const target = document.getElementById(location.hash.slice(1));
			const active = versions.find(version => target && version.contains(target)) || versions[0];
			versions.forEach(version => { version.hidden = version !== active; });
			document.documentElement.lang = active.lang;
			return target;
		}
		if (versions.length > 1) {
			site.addEventListener('click', event => {
				const link = event.target.closest('.spider-skip');
				if (!link) return;
				const target = document.getElementById(link.hash.slice(1));
				if (target) target.tabIndex = -1;
			});
			const initialTarget = syncLanguage();
			if (initialTarget) initialTarget.scrollIntoView();
			window.addEventListener('hashchange', () => {
				const target = syncLanguage();
				if (target) {
					if (target.matches('.spider-locale, .spider-content')) {
						target.tabIndex = -1;
						target.focus({ preventScroll: true });
					}
					target.scrollIntoView();
				}
			});
		}
		setupCounters(site);
	}
})();
