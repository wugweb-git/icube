<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>?v=<?php echo time(); ?>">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container flex">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">iCube</a>
        <nav class="main-nav">
            <ul class="flex">
                <li><a href="#">Products</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Insights</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
        <div class="header-actions flex">
            <a href="#" class="contact-link">Contact</a>
            <a href="#" class="btn btn-primary">Book Consultation</a>
        </div>
    </div>
</header>
