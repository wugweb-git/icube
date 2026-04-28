<?php
/**
 * Component: Service Card (Bento Card)
 * Figma: "Bento Cards" — nodes 256:2674–2679 inside 256:2672
 * Recycled on: /services, /services/[slug], homepage
 *
 * $args:
 *   title      string  Card heading
 *   desc       string  One-line description
 *   link       string  "Learn more" URL
 *   image      string  Full URI to card image (310×366 or wider for wide cards)
 *   image_alt  string  Alt text (defaults to title)
 *   wide       bool    true = row-1 half-width card, false = row-2 third-width card
 */
$title     = $args['title']     ?? '';
$desc      = $args['desc']      ?? '';
$link      = $args['link']      ?? '#';
$image     = $args['image']     ?? '';
$image_alt = $args['image_alt'] ?? esc_attr( $title );
$wide      = ! empty( $args['wide'] );
?>
<article class="svc-card<?php echo $wide ? ' svc-card--wide' : ''; ?>">
    <div class="svc-card__body">
        <div class="svc-card__copy">
            <h3 class="svc-card__title"><?php echo esc_html( $title ); ?></h3>
            <p  class="svc-card__desc"><?php echo esc_html( $desc ); ?></p>
        </div>
        <a href="<?php echo esc_url( $link ); ?>" class="svc-card__link">
            Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <?php if ( $image ) : ?>
    <div class="svc-card__img">
        <img src="<?php echo esc_url( $image ); ?>"
             alt="<?php echo esc_attr( $image_alt ); ?>"
             loading="lazy">
    </div>
    <?php endif; ?>
</article>
