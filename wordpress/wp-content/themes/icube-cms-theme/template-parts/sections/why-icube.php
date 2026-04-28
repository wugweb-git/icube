<?php
/**
 * Section: Why iCube — 4 feature cards
 * Figma: "12" — 256:2779, y=3277, h=620
 * H2: "Why iCube" (44px Inter Medium)
 * 4 equal cards in a row (flex-1 each), h=380px
 *   Card 1 (dark):  bg photo why-lowcode-bg.png  + gradient
 *   Card 2 (light): surface/default bg (#f0f0f0) + texture
 *   Card 3 (dark):  bg photo why-delivery-bg.png + gradient
 *   Card 4 (light): surface/default bg + texture
 * Component: template-parts/components/why-card.php
 * Images needed:
 *   why/why-lowcode-bg.png    (6972ae259cc4d79b01870d4071a20348e4d464e1.png)
 *   why/why-delivery-bg.png   (546ce97d9cd75c332397d8791fb622751dd7f6a3.png)
 *   icons/icon-dark-card.svg  (739a5471e6317d140674cd0b62ea9101e230458d.svg)
 *   icons/icon-light-card.svg (d8b4b2db23f7b7beb404353270225c6fd19b8fdc.svg)
 */
$img   = get_template_directory_uri() . '/assets/images';
$icons = $img . '/icons';
$why   = $img . '/why';

$cards = [
    [
        'title'    => 'Low-Code Expertise',
        'desc'     => 'Rapid development using OutSystems and modern platforms.',
        'style'    => 'dark',
        'bg_image' => $why  . '/why-lowcode-bg.png',
        'icon'     => $icons . '/icon-dark-card.svg',
    ],
    [
        'title'    => 'Enterprise Focus',
        'desc'     => 'Built for complex systems, integrations, and scale.',
        'style'    => 'light',
        'bg_image' => '',
        'icon'     => $icons . '/icon-light-card.svg',
    ],
    [
        'title'    => 'Faster Delivery',
        'desc'     => 'Reduced timelines compared to traditional development.',
        'style'    => 'dark',
        'bg_image' => $why  . '/why-delivery-bg.png',
        'icon'     => $icons . '/icon-dark-card.svg',
    ],
    [
        'title'    => 'Execution-Driven',
        'desc'     => 'Clear approach from planning to deployment.',
        'style'    => 'light',
        'bg_image' => '',
        'icon'     => $icons . '/icon-light-card.svg',
    ],
];
?>
<section class="why-icube" aria-labelledby="why-title">
    <header class="why-icube__header">
        <h2 class="why-icube__title" id="why-title">Why iCube</h2>
    </header>
    <div class="why-icube__grid">
        <?php foreach ( $cards as $card ) :
            get_template_part( 'template-parts/components/why-card', null, $card );
        endforeach; ?>
    </div>
</section>
