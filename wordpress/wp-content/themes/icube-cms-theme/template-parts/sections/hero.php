<?php
/**
 * Section: Hero
 * Figma: "9" — node 256:1227, y=80, h=600
 * Split layout: navy left panel | illustration right + floating 30K stat card
 * Images needed: hero-bg.png, hero-illustration.png, avatar-1..4.png
 */
$t   = get_template_directory_uri();
$img = $t . '/assets/images';

$title   = icube_mod( 'icube_hero_title',   'Enterprise Applications Built Faster with Low-Code. Time is money.' );
$sub     = icube_mod( 'icube_hero_sub',     'We design and deliver scalable enterprise systems using OutSystems and modern technologies for organizations across Singapore and Southeast Asia.' );
$eyebrow = icube_mod( 'icube_hero_eyebrow', 'Teams across enterprise and regulated industries' );
$c_url   = icube_mod( 'icube_cta_consult',  '/book-consultation' );
$s_url   = icube_mod( 'icube_cta_services', '/services' );
?>
<section class="hero" aria-label="Hero">
    <!-- Left: navy text panel -->
    <div class="hero__left">
        <div class="hero__panel">
            <div class="hero__bg-texture"
                 style="background-image:url('<?php echo esc_url($img); ?>/hero-bg.png')"
                 aria-hidden="true"></div>
            <div class="hero__content">
                <div class="hero__eyebrow" aria-label="Trusted by">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6L12 2z" fill="#BFD6F2"/>
                    </svg>
                    <span>Trusted by <em><?php echo esc_html( $eyebrow ); ?></em></span>
                </div>
                <h1 class="hero__title"><?php echo esc_html( $title ); ?></h1>
                <p  class="hero__sub"><?php echo esc_html( $sub ); ?></p>
                <div class="hero__cta">
                    <a href="<?php echo esc_url( $c_url ); ?>" class="btn btn--blue">Book Consultation</a>
                    <a href="<?php echo esc_url( $s_url ); ?>" class="btn btn--white">View Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Right: illustration + floating stat card -->
    <div class="hero__right" aria-hidden="true">
        <img class="hero__illustration"
             src="<?php echo esc_url($img); ?>/hero-illustration.png"
             alt="Enterprise platform dashboard">
        <!-- Floating stat card — Figma: 256:1248 "Frame 129" -->
        <div class="hero__stat-card">
            <div class="hero__stat-avatars">
                <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
                <img src="<?php echo esc_url($img); ?>/avatar-<?php echo $i; ?>.png"
                     alt="" class="hero__stat-avatar">
                <?php endfor; ?>
            </div>
            <div class="hero__stat-text">
                <span class="hero__stat-number">30K</span>
                <span class="hero__stat-label">Happy customer we have world-wide.</span>
            </div>
        </div>
    </div>
</section>
