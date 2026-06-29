document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.getElementById('menuToggle');
  var nav = document.getElementById('mobileNav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      nav.classList.toggle('open');
    });
  }

  // Top emergency bar: offset sticky header below it, allow dismiss
  var topBar = document.getElementById('topBar');
  var topBarClose = document.getElementById('topBarClose');

  function setTopBarOffset() {
    if (topBar && document.body.contains(topBar)) {
      document.documentElement.style.setProperty('--topbar-h', topBar.offsetHeight + 'px');
    } else {
      document.documentElement.style.setProperty('--topbar-h', '0px');
    }
  }

  setTopBarOffset();
  window.addEventListener('resize', setTopBarOffset);

  if (topBarClose && topBar) {
    topBarClose.addEventListener('click', function () {
      topBar.remove();
      setTopBarOffset();
    });
  }
});