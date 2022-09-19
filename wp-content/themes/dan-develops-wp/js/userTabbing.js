// to detect whether user is a keyboard user so I can add focus outline for theme
function handleFirstTab(e) {
  if (e.keyCode === 9) { // the tab key
      document.body.classList.add('user-is-tabbing');
      window.removeEventListener('keydown', handleFirstTab);
  }
}

window.addEventListener('keydown', handleFirstTab);