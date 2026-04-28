<?php
/**
 * Component: Insight Card (Blog Card)
 * Figma: "BlogCard" + "Inisghts item" in section.m-2 (256:2806)
 * White card, 250px cover photo, category badge (--primary/100 bg, --primary/600 text)
 * Recycled on: homepage, /insights archive, sidebar widgets
 *
 * $args:
 *   title     string  Post title
 *   excerpt   string  Short excerpt
 *   image     string  URI to 399×250 cover image
 *   image_alt string  Alt text
 *   link      string  Post URL
 *   category  string  Category label
 */
$title     = $args['title']     ?? '';
$excerpt   = $args['excerpt']   ?? '';
$image     = $args['image']     ?? '';
$image_alt = $args['image_alt'] ?? esc_attr( $title );
$link      = $args['link']      ?? '#';
$category  = $args['category']  ?? 'Insights';
?>
<article class="insight-card">
    <?php if ( $image ) : ?>
    <a href="<?php echo esc_url( $link ); ?>" class="insight-card__cover" tabindex="-1" aria-hidden="true">
        <img src="<?php echo esc_url( $image ); ?>"
             alt="<?php echo esc_attr( $image_alt ); ?>"
             loading="lazy">
    </a>
    <?php endif; ?>
    <div class="insight-card__body">
        <span class="insight-card__badge"><?php echo esc_html( $category ); ?></span>
        <div class="insight-card__copy">
            <h3 class="insight-card__title">
                <a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a>
            </h3>
            <p class="insight-card__excerpt"><?php echo esc_html( $excerpt ); ?></p>
        </div>
        <a href="<?php echo esc_url( $link ); ?>" class="insight-card__cta">
            Read Article &rarr;
        </a>
    </div>
</article>
