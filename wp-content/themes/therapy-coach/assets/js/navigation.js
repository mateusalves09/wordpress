/** Menu acessível; sem JavaScript, os links continuam visíveis. */
document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('.athlete-header');
  if (!header) return;
  const button = header.querySelector('.athlete-menu-button');
  const nav = header.querySelector('.athlete-nav');
  if (!button || !nav) return;
  header.classList.add('is-ready');
  function closeMenu() {
    button.setAttribute('aria-expanded', 'false');
    header.classList.remove('is-open');
  }
  button.addEventListener('click', function () {
    const open = button.getAttribute('aria-expanded') !== 'true';
    button.setAttribute('aria-expanded', String(open));
    header.classList.toggle('is-open', open);
  });
  nav.addEventListener('click', function (event) {
    if (event.target.closest('a')) closeMenu();
  });
  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && header.classList.contains('is-open')) {
      closeMenu();
      button.focus();
    }
  });
  document.addEventListener('click', function (event) {
    if (!header.contains(event.target)) closeMenu();
  });
  const mobile = window.matchMedia('(max-width: 760px)');
  function resetOnResize() { closeMenu(); }
  if (mobile.addEventListener) mobile.addEventListener('change', resetOnResize);
});

/** Revelação única: sem listeners de rolagem, bibliotecas ou ciclos contínuos. */
document.addEventListener('DOMContentLoaded', function () {
  const motion = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (motion.matches || !('IntersectionObserver' in window)) return;

  const elements = document.querySelectorAll(
    '.athlete-hero-copy, .athlete-portrait, .bolt-record-art, .athlete-section-heading, ' +
    '.athlete-bio-grid > *, .athlete-timeline li, .athlete-medal, ' +
    '.athlete-achievements article, .athlete-gallery figure, .athlete-legacy > *'
  );
  let remaining = elements.length;
  if (!remaining) return;

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      const element = entry.target;
      // Sem ocultar conteúdo previamente: falhas de JS não deixam áreas vazias.
      element.classList.add('athlete-enter');
      element.addEventListener('animationend', function () {
        element.classList.remove('athlete-enter');
        element.style.removeProperty('--athlete-delay');
      }, { once: true });
      observer.unobserve(element);
      remaining -= 1;
    });
    if (!remaining) observer.disconnect();
  }, { threshold: 0, rootMargin: '0px 0px -32px 0px' });

  elements.forEach(function (element) {
    const parent = element.parentElement;
    if (parent.matches('.athlete-timeline, .athlete-medals, .athlete-achievements, .athlete-gallery')) {
      const index = Array.prototype.indexOf.call(parent.children, element);
      element.style.setProperty('--athlete-delay', (index % 4) * 60 + 'ms');
    }
    observer.observe(element);
  });

  function stopMotion(event) {
    if (!event.matches) return;
    observer.disconnect();
    elements.forEach(function (element) {
      element.classList.remove('athlete-enter');
      element.style.removeProperty('--athlete-delay');
    });
  }
  if (motion.addEventListener) motion.addEventListener('change', stopMotion);
});

/** Filtros locais e compartilhamento; o conteúdo não depende destes controles. */
document.addEventListener('DOMContentLoaded', function () {
  const controls = document.querySelector('[data-timeline-controls]');
  if (controls) {
    const items = document.querySelectorAll('[data-timeline-year]');
    const buttons = controls.querySelectorAll('[data-year-filter]');
    const count = controls.querySelector('[data-timeline-count]');
    function filterYear(year) {
      let total = 0;
      items.forEach(function (item) {
        item.hidden = year !== 'all' && item.dataset.timelineYear !== year;
        if (!item.hidden) {
          total += 1;
          if (year !== 'all') item.querySelector('details').open = true;
        }
      });
      buttons.forEach(function (button) {
        button.setAttribute('aria-pressed', String(button.dataset.yearFilter === year));
      });
      count.textContent = total + (total === 1 ? ' momento' : ' momentos') + (year === 'all' ? ' na trajetória' : ' em ' + year);
    }
    controls.hidden = false;
    filterYear('all');
    controls.addEventListener('click', function (event) {
      const button = event.target.closest('[data-year-filter]');
      if (button && controls.contains(button)) filterYear(button.dataset.yearFilter);
    });
  }

  const share = document.querySelector('[data-athlete-share]');
  if (share) {
    const status = document.querySelector('[data-share-status]');
    const fallback = document.querySelector('[data-share-link]');
    share.hidden = false;
    share.addEventListener('click', async function () {
      const url = new URL(window.location.href);
      url.hash = '';
      try {
        if (!navigator.clipboard) throw new Error('Clipboard unavailable');
        await navigator.clipboard.writeText(url.href);
        status.textContent = 'Link copiado. Pronto para compartilhar!';
        fallback.hidden = true;
      } catch (_) {
        fallback.value = url.href;
        fallback.hidden = false;
        fallback.focus();
        fallback.select();
        status.textContent = 'Selecione e copie o link abaixo.';
      }
    });
  }
});
