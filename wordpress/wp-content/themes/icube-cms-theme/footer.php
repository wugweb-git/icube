<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<footer class="site-footer" role="contentinfo">
    <div class="site-footer__grid">
        <div class="site-footer__brand">
            <a class="site-footer__logo" href="<?php echo esc_url( home_url('/') ); ?>">iCube</a>
            <p>We design and deliver scalable enterprise systems using OutSystems and modern technologies for organizations across Singapore and Southeast Asia.</p>
        </div>
        <nav class="site-footer__links" aria-label="Footer navigation">
            <div class="site-footer__col">
                <h4>Services</h4>
                <ul>
                    <li><a href="/services/digital-transformation">Digital Transformation Consulting</a></li>
                    <li><a href="/services/outsystems">OutSystems Development</a></li>
                    <li><a href="/services/enterprise-application">Enterprise Application Development</a></li>
                    <li><a href="/services/mobile-app">Mobile App Development</a></li>
                    <li><a href="/services/maintenance">Application Maintenance &amp; Support</a></li>
                </ul>
            </div>
            <div class="site-footer__col">
                <h4>Solutions</h4>
                <ul>
                    <li><a href="/solutions/insurance">Insurance</a></li>
                    <li><a href="/solutions/transportation">Transportation</a></li>
                    <li><a href="/solutions/logistics">Logistics</a></li>
                    <li><a href="/solutions/manufacturing">Manufacturing</a></li>
                    <li><a href="/solutions/public-sector">Public Sector</a></li>
                </ul>
            </div>
            <div class="site-footer__col">
                <h4>Company</h4>
                <ul>
                    <li><a href="/product">Product</a></li>
                    <li><a href="/case-studies">Case Studies</a></li>
                    <li><a href="/insights">Insights</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/book-consultation">Book Consultation</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="site-footer__bottom">
        <span>Singapore &middot; Southeast Asia</span>
        <span>&copy; iCube <?php echo date('Y'); ?>. All rights reserved.</span>
        <ul class="site-footer__legal">
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/cookie-policy">Cookie Policy</a></li>
            <li><a href="/terms">Terms of Use</a></li>
        </ul>
        <span>Region: <strong>Singapore (EN)</strong></span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
