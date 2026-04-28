<?php
/**
 * Section: Services Bento Grid
 * Figma: "11" — 256:1479, y=923, h=1200
 *   Header: 256:2664 "What we help you build" (h2 + p)
 *   Grid:   256:2672 "Frame 6"
 *     Row 1 (256:2673): 2 wide cards at 592px each — gap 16px
 *     Row 2 (256:2676): 3 narrow cards at 389px each — gap 16px
 * Component: template-parts/components/service-card.php
 * Images: services/digital-transformation.png, outsystems.png,
 *         enterprise-app.png, mobile-app.png, maintenance.png
 */
$img = get_template_directory_uri() . '/assets/images/services';

$row1 = [
    [
        'title' => 'Digital Transformation Consulting',
        'desc'  => 'Define strategy, roadmap, and execution for enterprise systems.',
        'link'  => '/services/digital-transformation',
        'image' => $img . '/digital-transformation.png',
        'wide'  => true,
    ],
    [
        'title' => 'OutSystems Development',
        'desc'  => 'Build and deploy scalable low-code applications faster.',
        'link'  => '/services/outsystems',
        'image' => $img . '/outsystems.png',
        'wide'  => true,
    ],
];
$row2 = [
    [
        'title' => 'Enterprise Application Development',
        'desc'  => 'Custom web and enterprise systems tailored to business workflows.',
        'link'  => '/services/enterprise-application',
        'image' => $img . '/enterprise-app.png',
        'wide'  => false,
    ],
    [
        'title' => 'Mobile App Development',
        'desc'  => 'Native and cross-platform mobile applications.',
        'link'  => '/services/mobile-app',
        'image' => $img . '/mobile-app.png',
        'wide'  => false,
    ],
    [
        'title' => 'Application Maintenance & Support',
        'desc'  => 'Continuous monitoring, optimization, and system enhancements.',
        'link'  => '/services/maintenance',
        'image' => $img . '/maintenance.png',
        'wide'  => false,
    ],
];
?>
<section class="services" id="services" aria-labelledby="services-title">
    <header class="services__header">
        <h2 class="services__title" id="services-title">What we help you build</h2>
        <p  class="services__desc">End-to-end delivery &mdash; from strategy to enterprise application development.</p>
    </header>

    <div class="services__grid">
        <div class="services__row services__row--2">
            <?php foreach ( $row1 as $card ) :
                get_template_part( 'template-parts/components/service-card', null, $card );
            endforeach; ?>
        </div>
        <div class="services__row services__row--3">
            <?php foreach ( $row2 as $card ) :
                get_template_part( 'template-parts/components/service-card', null, $card );
            endforeach; ?>
        </div>
    </div>
</section>
