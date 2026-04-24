<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="archive-list">
    <h1><?php single_post_title(); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo esc_html(get_the_date()); ?></p>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</main>
<?php get_footer();
