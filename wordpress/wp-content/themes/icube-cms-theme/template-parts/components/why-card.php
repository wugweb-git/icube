<?php
/**
 * Component: Why iCube Card
 * Figma: "DivContainerX" cards in 256:2779
 * Reusable on any page needing a feature/differentiator card
 *
 * $args:
 *   $args['title']    string  Card heading
 *   $args['desc']     string  Card description
 *   $args['style']    string  'dark' or 'light'
 *   $args['bg_image'] string  URI to background photo (dark cards only)
 *   $args['icon']     string  URI to 50×50 icon SVG
 */
$title    = $args['title']    ?? '';
$desc     = $args['desc']     ?? '';
$style    = $args['style']    ?? 'dark';
$bg_image = $args['bg_image'] ?? '';
$icon     = $args['icon']     ?? '';
$cls      = 'why-card why-card--' . $style;
?>
<div class="<?php echo esc_attr($cls); ?>">
    <?php if ($style === 'dark' && $bg_image): ?>
    <div class="why-card__bg" style="background-image:url('<?php echo esc_url($bg_image); ?>')"></div>
    <div class="why-card__bg-overlay"></div>
    <?php elseif ($style === 'light'): ?>
    <div class="why-card__bg why-card__bg--texture"></div>
    <?php endif; ?>
    <div class="why-card__content">
        <?php if ($icon): ?>
        <div class="why-card__icon">
            <img src="<?php echo esc_url($icon); ?>" alt="" width="50" height="50" aria-hidden="true">
        </div>
        <?php endif; ?>
        <h3 class="why-card__title"><?php echo esc_html($title); ?></h3>
        <p class="why-card__desc"><?php echo esc_html($desc); ?></p>
    </div>
</div>
