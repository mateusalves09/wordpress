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
