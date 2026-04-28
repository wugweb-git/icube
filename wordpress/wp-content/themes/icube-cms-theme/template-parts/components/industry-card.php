<?php
/**
 * Component: Industry Card
 * Figma: "Solutions" cards in "10" section (256:2793–2797)
 * White card on #f0f0f0 bg, 48px icon, 32px title, 18px desc
 * Recycled on: homepage, /solutions, /solutions/[slug]
 *
 * $args:
 *   title  string  Industry name
 *   desc   string  One-line description
 *   icon   string  URI to 48×48 SVG icon
 *   link   string  URL to industry page (optional)
 */
$title = $args['title'] ?? '';
$desc  = $args['desc']  ?? '';
$icon  = $args['icon']  ?? '';
$link  = $args['link']  ?? '';
?>
<div class="industry-card">
    <div class="industry-card__top">
        <?php if ( $icon ) : ?>
        <img src="<?php echo esc_url( $icon ); ?>" alt="" width="48" height="48"
             class="industry-card__icon" aria-hidden="true" loading="lazy">
        <?php endif; ?>
        <h3 class="industry-card__title">
            <?php if ( $link ) : ?>
                <a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a>
            <?php else : ?>
                <?php echo esc_html( $title ); ?>
            <?php endif; ?>
        </h3>
    </div>
    <p class="industry-card__desc"><?php echo esc_html( $desc ); ?></p>
</div>
