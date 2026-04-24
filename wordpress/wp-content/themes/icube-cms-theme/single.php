<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="post-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <p class="post-meta"><?php echo esc_html(get_the_date()); ?></p>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer();
