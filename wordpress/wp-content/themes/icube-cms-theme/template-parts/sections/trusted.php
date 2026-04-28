<?php
/**
 * Section: Trusted Brands Marquee
 * Figma node: 256:1258 — "div.home-trusted-wrapper"
 * Logos: Microsoft, Google, Accenture (Mask group), Goldman Sachs, IBM
 * Duplicated for seamless CSS animation loop
 */
$img_uri = get_template_directory_uri() . '/assets/images/logos';
$logos = [
    ['src' => 'microsoft.png',    'alt' => 'Microsoft'],
    ['src' => 'google.png',       'alt' => 'Google'],
    ['src' => 'accenture.png',    'alt' => 'Accenture'],
    ['src' => 'goldman-sachs.png','alt' => 'Goldman Sachs'],
    ['src' => 'ibm.png',          'alt' => 'IBM'],
];
$all = array_merge($logos, $logos); // duplicate for seamless loop
?>
<section class="trusted-brands" aria-label="Trusted by">
    <p class="trusted-brands__heading">Built by teams with experience across</p>
    <div class="trusted-brands__marquee-wrap" aria-hidden="true">
        <div class="trusted-brands__fade trusted-brands__fade--left"></div>
        <div class="trusted-brands__fade trusted-brands__fade--right"></div>
        <div class="trusted-brands__track">
            <?php foreach ($all as $logo): ?>
            <div class="trusted-brands__item">
                <img src="<?php echo esc_url($img_uri . '/' . $logo['src']); ?>"
                     alt="<?php echo esc_attr($logo['alt']); ?>"
                     class="trusted-brands__logo"
                     loading="lazy">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
