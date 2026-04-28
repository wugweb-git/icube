<?php
/**
 * Component: Insight / Blog Card
 * Figma: "BlogCard" in 256:2806 (Insights section)
 * Reusable on blog archive, homepage, any listing page
 *
 * $args:
 *   $args['title']    string  Post title
 *   $args['excerpt']  string  Short excerpt
 *   $args['image']    string  URI to 399×250px cover image
 *   $args['image_alt'] string Alt text
 *   $args['link']     string  Post URL
 *   $args['category'] string  Category label (e.g. "Low-Code Development")
 */
$title    = $args['title']     ?? '';
$excerpt  = $args['excerpt']   ?? '';
$image    = $args['image']     ?? '';
$image_alt = $args['image_alt'] ?? esc_attr($title);
$link     = $args['link']      ?? '#';
$category = $args['category']  ?? 'Insights';
?>
<div class="insight-card">
    <?php if ($image): ?>
    <a href="<?php echo esc_url($link); ?>" class="insight-card__img-wrap" tabindex="-1" aria-hidden="true">
        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>" loading="lazy">
    </a>
    <?php endif; ?>
    <div class="insight-card__body">
        <span class="insight-card__category"><?php echo esc_html($category); ?></span>
        <div class="insight-card__copy">
            <h3 class="insight-card__title">
                <a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a>
            </h3>
            <p class="insight-card__excerpt"><?php echo esc_html($excerpt); ?></p>
        </div>
        <a href="<?php echo esc_url($link); ?>" class="insight-card__cta">Read Article &rarr;</a>
    </div>
</div>
