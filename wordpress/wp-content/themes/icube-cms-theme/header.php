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
        <button class="site-header__burger"
                aria-label="Open menu"
                aria-expanded="false"
                aria-controls="mobile-nav">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<!-- Mobile nav drawer (hidden on desktop, shown via JS on mobile) -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation" aria-hidden="true">
    <div class="mobile-nav__item">
        <a class="mobile-nav__link" href="/product">Product</a>
    </div>
    <div class="mobile-nav__item">
        <button class="mobile-nav__link" aria-expanded="false" data-sub="services-sub">
            Services
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <div class="mobile-nav__sub" id="services-sub">
            <a href="/services/digital-transformation">Digital Transformation Consulting</a>
            <a href="/services/outsystems">OutSystems Development</a>
            <a href="/services/enterprise-application">Enterprise Application Development</a>
            <a href="/services/mobile-app">Mobile App Development</a>
            <a href="/services/maintenance">Application Maintenance &amp; Support</a>
        </div>
    </div>
    <div class="mobile-nav__item">
        <button class="mobile-nav__link" aria-expanded="false" data-sub="solutions-sub">
            Solutions
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <div class="mobile-nav__sub" id="solutions-sub">
            <a href="/solutions/insurance">Insurance</a>
            <a href="/solutions/transportation">Transportation</a>
            <a href="/solutions/logistics">Logistics</a>
            <a href="/solutions/manufacturing">Manufacturing</a>
            <a href="/solutions/public-sector">Public Sector</a>
        </div>
    </div>
    <div class="mobile-nav__item">
        <a class="mobile-nav__link" href="/case-studies">Case Studies</a>
    </div>
    <div class="mobile-nav__item">
        <a class="mobile-nav__link" href="/insights">Insights</a>
    </div>
    <div class="mobile-nav__item">
        <a class="mobile-nav__link" href="/about">About</a>
    </div>
    <div class="mobile-nav__ctas">
        <a href="/contact" class="btn btn--white">Contact</a>
        <a href="/book-consultation" class="btn btn--blue">Book Consultation</a>
    </div>
</nav>
