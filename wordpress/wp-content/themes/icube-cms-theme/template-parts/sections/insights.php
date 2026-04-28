<?php
/**
 * Section: Insights (Blog)
 * Figma: "section.m-2" — 256:2806, y=5124, h=892
 * bg: #f0f0f0
 * Header: H2 "Insights" + subtitle | right: "View All Insights" btn
 * List: horizontal scroll, 5 insight cards each 400×(250+body)px, gap 16px
 * Component: template-parts/components/insight-card.php
 * Images needed: insights/insights-1..4.png (or 5)
 *   insights-1: 49d940ccd11ca15ed097eefb1211454d0470f7e6.png
 *   insights-2: c81fd30a688af803c5b422203fbface43be6ea2c.png
 *   insights-3: 84bd97107ba8032974a9549fd893a9bb4c8b049d.png
 *   insights-4: fc31412cad0d0c93edbcae78afb2909655d8175d.png
 *
 * In production: replace $posts with WP_Query pulling 'insight' CPT
 */
$img = get_template_directory_uri() . '/assets/images/insights';

/* ── Production: swap this block with a WP_Query ── */
$posts = [
    [
        'title'    => 'Low-Code vs Traditional Development: What Enterprises Should Consider',
        'excerpt'  => 'A comparison of development approaches and how low-code platforms impact delivery timelines and scalability.',
        'image'    => $img . '/insights-1.png',
        'link'     => '/insights/low-code-vs-traditional',
        'category' => 'Low-Code Development',
    ],
    [
        'title'    => 'OutSystems in 2025: What Enterprise Buyers Need to Know',
        'excerpt'  => 'How the OutSystems platform has evolved and what it means for enterprise software delivery in regulated industries.',
        'image'    => $img . '/insights-2.png',
        'link'     => '/insights/outsystems-2025',
        'category' => 'OutSystems',
    ],
    [
        'title'    => 'Building KYC Automation for Corporate Secretaries',
        'excerpt'  => 'A case study in using low-code to replace manual document processing workflows in Singapore.',
        'image'    => $img . '/insights-3.png',
        'link'     => '/insights/kyc-automation',
        'category' => 'Case Study',
    ],
    [
        'title'    => 'Digital Transformation in Southeast Asia: Key Trends',
        'excerpt'  => 'What enterprise teams in Singapore are prioritising as they modernise their core systems.',
        'image'    => $img . '/insights-4.png',
        'link'     => '/insights/sea-digital-transformation',
        'category' => 'Enterprise',
    ],
];
/* ─────────────────────────────────────────────── */
?>
<section class="insights" aria-labelledby="insights-title">
    <div class="insights__header">
        <div class="insights__header-left">
            <h2 class="insights__title" id="insights-title">Insights</h2>
            <p  class="insights__desc">
                Perspectives on enterprise systems, low-code, and digital transformation.
            </p>
        </div>
        <a href="/insights" class="btn btn--white">View All Insights</a>
    </div>
    <div class="insights__list" role="list">
        <?php foreach ( $posts as $post ) :
            get_template_part( 'template-parts/components/insight-card', null, $post );
        endforeach; ?>
    </div>
</section>
