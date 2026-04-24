<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <div class="container footer-inner">
        <div>
            <strong><?php bloginfo('name'); ?></strong><br>
            <span><?php bloginfo('description'); ?></span>
        </div>
        <div>
            © <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
