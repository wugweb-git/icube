<?php
/**
 * Section: Services — "What we help you build"
 * Figma nodes: 256:2664 (header) + 256:2672 (bento grid)
 * Grid: row-1 = 2 wide cards (592px), row-2 = 3 narrow cards (389px)
 * Component: template-parts/components/service-card.php
 */
$img_uri = get_template_directory_uri() . '/assets/images/services';

$services_row1 = [
    [
        'title' => 'Digital Transformation Consulting',
        'desc'  => 'Define strategy, roadmap, and execution for enterprise systems.',
        'link'  => '#',
        'image' => $img_uri . '/digital-transformation.png',
        'wide'  => true,
    ],
    [
        'title' => 'OutSystems Development',
        'desc'  => 'Build and deploy scalable low-code applications faster.',
        'link'  => '#',
        'image' => $img_uri . '/outsystems.png',
        'wide'  => true,
    ],
];

$services_row2 = [
    [
        'title' => 'Enterprise Application Development',
        'desc'  => 'Custom web and enterprise systems tailored to business workflows.',
        'link'  => '#',
        'image' => $img_uri . '/enterprise-app.png',
        'wide'  => false,
    ],
    [
        'title' => 'Mobile App Development',
        'desc'  => 'Native and cross-platform mobile applications.',
        'link'  => '#',
        'image' => $img_uri . '/mobile-app.png',
        'wide'  => false,
    ],
    [
        'title' => 'Application Maintenance &amp; Support',
        'desc'  => 'Continuous monitoring, optimization, and system enhancements.',
        'link'  => '#',
        'image' => $img_uri . '/maintenance.png',
        'wide'  => false,
    ],
];
?>
<section class="services-section" id="services" aria-labelledby="services-heading">
    <!-- Section header -->
    <header class="services-section__header">
        <span class="services-section__eyebrow">Services</span>
        <h2 class="services-section__title" id="services-heading">What we help you build</h2>
        <p class="services-section__desc">End-to-end delivery &mdash; from strategy to enterprise application development.</p>
    </header>

    <!-- Bento grid -->
    <div class="services-section__grid">
        <!-- Row 1: two wide cards -->
        <div class="services-section__row services-section__row--2">
            <?php foreach ($services_row1 as $card): ?>
                <?php get_template_part('template-parts/components/service-card', null, $card); ?>
            <?php endforeach; ?>
        </div>
        <!-- Row 2: three narrow cards -->
        <div class="services-section__row services-section__row--3">
            <?php foreach ($services_row2 as $card): ?>
                <?php get_template_part('template-parts/components/service-card', null, $card); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
