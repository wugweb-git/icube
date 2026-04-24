<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="post-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h1><?php the_title(); ?></h1>
        <p><?php echo esc_html(get_the_date()); ?></p>
        <?php the_content(); ?>
    </article>
<?php endwhile; endif; ?>
</main>
<?php get_footer();
