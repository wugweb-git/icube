// Pause marquee on hover — no dependencies
document.addEventListener('DOMContentLoaded', function () {
    var track = document.querySelector('.marquee-track');
    if (!track) return;
    track.addEventListener('mouseenter', function () { track.style.animationPlayState = 'paused'; });
    track.addEventListener('mouseleave', function () { track.style.animationPlayState = 'running'; });
});
