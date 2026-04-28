<?php
/**
 * Component: Service Card (Bento Card)
 * Figma: "Bento Cards" instances in 256:2672
 * Reusable in: services section, any page needing a service tile
 *
 * Args (via $args or set before get_template_part):
 *   $args['title']       string  Card title
 *   $args['desc']        string  Card description
 *   $args['link']        string  URL for "Learn more"
 *   $args['image']       string  Absolute path or URI to card image
 *   $args['image_alt']   string  Alt text
 *   $args['wide']        bool    True = row-1 wide card, False = row-2 narrow card
 */
$title     = $args['title']     ?? 'Service';
$desc      = $args['desc']      ?? '';
$link      = $args['link']      ?? '#';
$image     = $args['image']     ?? '';
$image_alt = $args['image_alt'] ?? esc_attr($title);
$wide      = $args['wide']      ?? false;
$cls       = $wide ? 'svc-card svc-card--wide' : 'svc-card svc-card--narrow';
?>
<div class="<?php echo esc_attr($cls); ?>">
    <div class="svc-card__text">
        <div class="svc-card__info">
            <h3 class="svc-card__title"><?php echo esc_html($title); ?></h3>
            <p class="svc-card__desc"><?php echo esc_html($desc); ?></p>
        </div>
        <a href="<?php echo esc_url($link); ?>" class="svc-card__link">
            Learn more
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <?php if ($image): ?>
    <div class="svc-card__img<?php echo $wide ? ' svc-card__img--wide' : ''; ?>">
        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>" loading="lazy">
    </div>
    <?php endif; ?>
</div>
