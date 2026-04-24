<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="page-content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer();
