<?php
/**
 * Section: Case Studies (Customers)
 * Figma: "Frame 202" — 256:2680, y=2123, h=602
 * Bordered white card: photo left (504px, rounded-16) | quote + stats + CTA right (600px)
 * In production: pull from 'case_study' CPT. Here: hardcoded from Figma content.
 * Images needed: testimonial-customer.png
 *   (Figma asset: http://localhost:3845/assets/259ff7c0dd01ab9b63a1360a36ebb0280025e609.png)
 * Component: stat-bubble.php (reused for +60%, -95%)
 */
$img = get_template_directory_uri() . '/assets/images';

// In production replace with WP_Query( ['post_type'=>'case_study','posts_per_page'=>1] )
$case = [
    'photo'   => $img . '/testimonial-customer.png',
    'quote'   => 'iCube enabled us to move from fragmented systems to a structured digital platform. The team focused on execution, not just strategy.',
    'stats'   => [
        [ 'number' => '+60%', 'label' => 'process efficiency', 'variant' => 'light' ],
        [ 'number' => '-95%', 'label' => 'manual workload',    'variant' => 'blue'  ],
    ],
    'cta_url' => '/case-studies',
];
?>
<section class="case-studies" aria-labelledby="cs-title">
    <div class="case-studies__card">
        <!-- Photo -->
        <div class="case-studies__photo">
            <img src="<?php echo esc_url( $case['photo'] ); ?>"
                 alt="iCube customer" loading="lazy">
            <div class="case-studies__photo-overlay" aria-hidden="true"></div>
        </div>
        <!-- Content -->
        <div class="case-studies__content">
            <blockquote class="case-studies__quote">
                <p><?php echo esc_html( $case['quote'] ); ?></p>
            </blockquote>
            <div class="case-studies__stats">
                <?php foreach ( $case['stats'] as $s ) :
                    get_template_part( 'template-parts/components/stat-bubble', null, $s );
                endforeach; ?>
            </div>
            <a href="<?php echo esc_url( $case['cta_url'] ); ?>" class="btn btn--blue">
                Book Consultation
            </a>
        </div>
    </div>
</section>
