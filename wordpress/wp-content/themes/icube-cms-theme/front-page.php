<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main>
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <p class="eyebrow"><?php echo esc_html(icube_theme_setting('icube_eyebrow', 'Digital Product Studio')); ?></p>
                <h1 class="hero-title"><?php echo esc_html(icube_theme_setting('icube_hero_title', 'Build impact-focused digital experiences with iCube.')); ?></h1>
                <p class="hero-copy"><?php echo esc_html(icube_theme_setting('icube_hero_copy', 'We partner with ambitious teams to launch scalable websites, products, and growth systems powered by modern engineering and design.')); ?></p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="<?php echo esc_url(icube_theme_setting('icube_primary_cta_link', '/contact')); ?>"><?php echo esc_html(icube_theme_setting('icube_primary_cta_text', 'Start a project')); ?></a>
                    <a class="btn btn-secondary" href="<?php echo esc_url(icube_theme_setting('icube_secondary_cta_link', '/blog')); ?>"><?php echo esc_html(icube_theme_setting('icube_secondary_cta_text', 'View case studies')); ?></a>
                </div>
            </div>
            <div class="hero-visual" aria-hidden="true">
                <!-- Background/illustration area; add image or SVG as needed -->
            </div>
        </div>
    </section>

    <section class="section what-we-do">
        <div class="container">
            <h2>What we do</h2>
            <div class="cards">
                <article class="card"><h3>Web Platforms</h3><p>CMS-led websites that balance storytelling, performance, and easy editing for content teams.</p></article>
                <article class="card"><h3>Product Design</h3><p>UX/UI systems from discovery to delivery, built for conversion and long-term maintainability.</p></article>
                <article class="card"><h3>Growth Enablement</h3><p>Measurement, optimization, and automation foundations to help your team scale confidently.</p></article>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container split">
            <div>
                <h2>Recent insights</h2>
                <p>Publish articles in WordPress and they will automatically appear here.</p>
            </div>
            <div class="post-list">
                <?php
                $recent = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'post_status' => 'publish',
                ]);
                if ($recent->have_posts()) :
                    while ($recent->have_posts()) : $recent->the_post();
                        ?>
                        <article>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <small><?php echo esc_html(get_the_date()); ?></small>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p>No posts yet. Add your first post from WP Admin → Posts.</p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
