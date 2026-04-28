<?php
/**
 * Section: CTA Banner
 * Figma: "Frame 34" — 256:2804, y=4583, h=541
 * bg: #23232d (--text/primary) with texture overlay
 * Layout: 2-col grid (1.5fr / 1fr)
 *   Left:  eyebrow + H2 + subtitle + email form + disclaimer
 *   Right: white rounded card with testimonial quote + author
 * Email icon: icons/icon-email.svg (31f47714b05deb30e8eb2281cc1f698fe645eb9e.svg)
 */
$icons = get_template_directory_uri() . '/assets/images/icons';
$img   = get_template_directory_uri() . '/assets/images';
?>
<section class="cta-banner" id="contact" aria-labelledby="cta-title">
    <div class="cta-banner__bg"
         style="background-image:url('<?php echo esc_url($img); ?>/bg-texture.png')"
         aria-hidden="true"></div>
    <div class="cta-banner__inner">
        <!-- Left -->
        <div class="cta-banner__left">
            <p class="cta-banner__eyebrow">30 minutes. Your content. Live Results.</p>
            <h2 class="cta-banner__title" id="cta-title">
                Start your digital<br>transformation
            </h2>
            <p class="cta-banner__desc">
                Discuss your systems, workflows, and requirements with our team.
            </p>
            <div class="cta-banner__form">
                <label class="cta-banner__input-wrap">
                    <img src="<?php echo esc_url($icons); ?>/icon-email.svg"
                         alt="" width="20" height="20" aria-hidden="true"
                         class="cta-banner__input-icon">
                    <input type="email" placeholder="Work email"
                           class="cta-banner__input"
                           aria-label="Work email">
                </label>
                <a href="/book-consultation" class="btn btn--white">Book Consultation</a>
            </div>
            <p class="cta-banner__disclaimer">
                No sales pressure. Focused discussion on your requirements.
            </p>
        </div>
        <!-- Right: testimonial card -->
        <div class="cta-banner__right">
            <div class="cta-card">
                <blockquote class="cta-card__quote">
                    &ldquo;Our team moves faster because they know exactly what&rsquo;s
                    compliant. And our compliance team finally focuses on real work,
                    not chasing down emails.&rdquo;
                </blockquote>
                <div class="cta-card__author">
                    <strong>Head of compliance</strong>
                    <span>Large Broker-Dealer</span>
                </div>
            </div>
        </div>
    </div>
</section>
