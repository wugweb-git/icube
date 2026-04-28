<?php
/**
 * Section: Hero
 * Figma node: 256:1227 — "9"
 * Layout: split — dark navy left (text + CTAs) | illustration right + floating stat card
 */
$img_uri = get_template_directory_uri() . '/assets/images';
?>
<section class="hero-split" aria-label="Hero">
    <!-- Left: navy text panel -->
    <div class="hero-split__left">
        <div class="hero-split__inner">
            <div class="hero-split__bg-overlay"
                 style="background-image:url('<?php echo $img_uri; ?>/hero-bg.png')"></div>
            <div class="hero-split__content">
                <div class="hero-eyebrow">
                    <svg class="hero-eyebrow__star" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6L12 2z" fill="#BFD6F2"/>
                    </svg>
                    <span>Trusted by <span class="hero-eyebrow__highlight">Teams across enterprise and regulated industries</span></span>
                </div>
                <h1 class="hero-split__title">Enterprise Applications Built Faster with Low-Code.<br>Time is money.</h1>
                <p class="hero-split__sub">We design and deliver scalable enterprise systems using OutSystems and modern technologies for organizations across Singapore and Southeast Asia.</p>
                <div class="hero-split__cta">
                    <a href="#contact" class="btn btn--blue">Book Consultation</a>
                    <a href="#services" class="btn btn--white-outline">View Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Right: illustration + floating 30K stat card (Figma 256:1248) -->
    <div class="hero-split__right">
        <img src="<?php echo $img_uri; ?>/hero-illustration.png"
             alt="Enterprise platform dashboard preview"
             class="hero-split__illustration"
             loading="eager">
        <div class="hero-stat-card">
            <div class="hero-stat-card__avatars">
                <img src="<?php echo $img_uri; ?>/avatar-1.png" alt="" class="hero-stat-card__avatar">
                <img src="<?php echo $img_uri; ?>/avatar-2.png" alt="" class="hero-stat-card__avatar">
                <img src="<?php echo $img_uri; ?>/avatar-3.png" alt="" class="hero-stat-card__avatar">
                <img src="<?php echo $img_uri; ?>/avatar-4.png" alt="" class="hero-stat-card__avatar">
            </div>
            <div class="hero-stat-card__text">
                <span class="hero-stat-card__number">30K</span>
                <span class="hero-stat-card__label">Happy customer we have world-wide.</span>
            </div>
        </div>
    </div>
</section>
