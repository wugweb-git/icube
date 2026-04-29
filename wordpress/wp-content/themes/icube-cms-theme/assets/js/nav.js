/**
 * Mobile navigation — burger toggle + sub-menu accordion
 * iCube CMS Theme
 */
(function () {
  'use strict';

  var burger  = document.querySelector('.site-header__burger');
  var mobileNav = document.getElementById('mobile-nav');
  if (!burger || !mobileNav) return;

  // ── Burger toggle ────────────────────────────────
  burger.addEventListener('click', function () {
    var open = mobileNav.classList.toggle('is-open');
    burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    mobileNav.setAttribute('aria-hidden', open ? 'false' : 'true');
    document.body.style.overflow = open ? 'hidden' : '';
  });

  // ── Sub-menu accordion ───────────────────────────
  var subTriggers = mobileNav.querySelectorAll('[data-sub]');
  subTriggers.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var targetId = btn.getAttribute('data-sub');
      var sub      = document.getElementById(targetId);
      if (!sub) return;
      var isOpen = sub.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  });

  // ── Close on outside click ───────────────────────
  document.addEventListener('click', function (e) {
    if (!mobileNav.classList.contains('is-open')) return;
    if (!mobileNav.contains(e.target) && !burger.contains(e.target)) {
      mobileNav.classList.remove('is-open');
      burger.setAttribute('aria-expanded', 'false');
      mobileNav.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
  });

  // ── Close on ESC ────────────────────────────────
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileNav.classList.contains('is-open')) {
      mobileNav.classList.remove('is-open');
      burger.setAttribute('aria-expanded', 'false');
      mobileNav.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
      burger.focus();
    }
  });
}());

/**
 * Marquee — pause on hover (also in marquee.js, consolidated here)
 */
(function () {
  var track = document.querySelector('.trusted__track');
  if (!track) return;
  track.addEventListener('mouseenter', function () { track.style.animationPlayState = 'paused'; });
  track.addEventListener('mouseleave', function () { track.style.animationPlayState = 'running'; });
}());
