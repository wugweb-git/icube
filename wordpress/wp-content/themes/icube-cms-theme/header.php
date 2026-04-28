<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="site-header__inner">
        <a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="iCube home">
            iCube
        </a>
        <nav class="site-header__nav" aria-label="Primary navigation">
            <ul role="list">
                <li><a href="/product">Product</a></li>
                <li class="has-children">
                    <a href="/services">Services</a>
                    <ul class="sub-nav" role="list">
                        <li><a href="/services/digital-transformation">Digital Transformation Consulting</a></li>
                        <li><a href="/services/outsystems">OutSystems Development</a></li>
                        <li><a href="/services/enterprise-application">Enterprise Application Development</a></li>
                        <li><a href="/services/mobile-app">Mobile App Development</a></li>
                        <li><a href="/services/maintenance">Application Maintenance &amp; Support</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="/solutions">Solutions</a>
                    <ul class="sub-nav" role="list">
                        <li><a href="/solutions/insurance">Insurance</a></li>
                        <li><a href="/solutions/transportation">Transportation</a></li>
                        <li><a href="/solutions/logistics">Logistics</a></li>
                        <li><a href="/solutions/manufacturing">Manufacturing</a></li>
                        <li><a href="/solutions/public-sector">Public Sector</a></li>
                    </ul>
                </li>
                <li><a href="/case-studies">Case Studies</a></li>
                <li><a href="/insights">Insights</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
        <div class="site-header__actions">
            <a href="/contact" class="site-header__contact">Contact</a>
            <a href="/book-consultation" class="btn btn--blue">Book Consultation</a>
        </div>
        <button class="site-header__burger" aria-label="Open menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
