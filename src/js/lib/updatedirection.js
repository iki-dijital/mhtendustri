export function updateDirection() {
  const langIndicator = document.getElementById('lang-indicator');

  langIndicator.textContent = document.documentElement.dir;

  langIndicator.setAttribute(
    'href',
    `${window.location.origin + window.location.pathname}?dir=${
      document.documentElement.dir === 'ltr' ? 'rtl' : 'ltr'
    }`
  );

  langIndicator.addEventListener('click', (e) => {
    e.preventDefault();
    document.documentElement.dir =
      document.documentElement.dir === 'ltr' ? 'rtl' : 'ltr';
      langIndicator.textContent = document.documentElement.dir;
  });
}
