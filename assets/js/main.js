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

  // Auto-hide top bar after scrolling past 20% of page height
  var topBarHidden = false;

  function hideTopBar() {
    if (!topBar || topBarHidden) return;
    topBarHidden = true;
    var h = topBar.offsetHeight;
    topBar.style.maxHeight = h + 'px';
    topBar.style.opacity = '1';
    // Force a reflow before animating
    requestAnimationFrame(function () {
      topBar.style.maxHeight = '0px';
      topBar.style.opacity = '0';
    });
    setTimeout(function () {
      if (topBar && topBar.parentNode) {
        topBar.remove();
      }
      setTopBarOffset();
    }, 420);
  }

  var scrollTicking = false;
  window.addEventListener('scroll', function () {
    if (topBarHidden) return;
    if (!scrollTicking) {
      scrollTicking = true;
      requestAnimationFrame(function () {
        var scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
        var scrolledPercent = scrollableHeight > 0 ? (window.scrollY / scrollableHeight) * 100 : 0;
        if (scrolledPercent >= 20) {
          hideTopBar();
        }
        scrollTicking = false;
      });
    }
  });
});