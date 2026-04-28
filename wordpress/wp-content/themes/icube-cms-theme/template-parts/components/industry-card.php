<?php
/**
 * Component: Industry Card
 * Figma: "Solutions" cards in 256:2790 (Industries section)
 * Reusable on industry pages, services pages, etc.
 *
 * $args:
 *   $args['title']  string  Industry name
 *   $args['desc']   string  Short description
 *   $args['icon']   string  URI to 48×48 icon SVG
 *   $args['link']   string  URL (optional)
 */
$title = $args['title'] ?? '';
$desc  = $args['desc']  ?? '';
$icon  = $args['icon']  ?? '';
$link  = $args['link']  ?? '';
?>
<div class="industry-card">
    <div class="industry-card__top">
        <?php if ($icon): ?>
        <img src="<?php echo esc_url($icon); ?>" alt="" width="48" height="48" class="industry-card__icon" aria-hidden="true">
        <?php endif; ?>
        <h3 class="industry-card__title">
            <?php if ($link): ?>
                <a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a>
            <?php else: ?>
                <?php echo esc_html($title); ?>
            <?php endif; ?>
        </h3>
    </div>
    <p class="industry-card__desc"><?php echo esc_html($desc); ?></p>
</div>
