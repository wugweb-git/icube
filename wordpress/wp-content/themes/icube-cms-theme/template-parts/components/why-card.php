<?php
/**
 * Component: Why Card
 * Figma: 4 cards in "12" section (256:2779 > DivContainerX > 256:929–932)
 * - dark cards: photo bg + gradient overlay, white text
 * - light cards: surface/default bg, dark text
 * Recycled on: homepage, /about, /services
 *
 * $args:
 *   title     string  Card heading
 *   desc      string  Description (20px)
 *   style     string  'dark' | 'light'
 *   bg_image  string  URI to full-bleed photo (dark cards only)
 *   icon      string  URI to 50×50 icon SVG
 */
$title    = $args['title']    ?? '';
$desc     = $args['desc']     ?? '';
$style    = $args['style']    ?? 'dark';
$bg_image = $args['bg_image'] ?? '';
$icon     = $args['icon']     ?? '';
?>
<div class="why-card why-card--<?php echo esc_attr( $style ); ?>">
    <?php if ( $style === 'dark' && $bg_image ) : ?>
        <div class="why-card__photo" aria-hidden="true">
            <img src="<?php echo esc_url( $bg_image ); ?>" alt="">
        </div>
        <div class="why-card__overlay" aria-hidden="true"></div>
    <?php endif; ?>
    <div class="why-card__inner">
        <?php if ( $icon ) : ?>
        <div class="why-card__icon" aria-hidden="true">
            <img src="<?php echo esc_url( $icon ); ?>" alt="" width="50" height="50">
        </div>
        <?php endif; ?>
        <h3 class="why-card__title"><?php echo esc_html( $title ); ?></h3>
        <p  class="why-card__desc"><?php echo esc_html( $desc ); ?></p>
    </div>
</div>
