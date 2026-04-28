<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">iCube</a>
                <p>We design and deliver scalable enterprise systems using OutSystems and modern technologies for organizations across Singapore and Southeast Asia.</p>
            </div>
            <div class="footer-links">
                <div class="link-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Digital Transformation Consulting</a></li>
                        <li><a href="#">OutSystems Development</a></li>
                        <li><a href="#">Enterprise Application Development</a></li>
                        <li><a href="#">Mobile App Development</a></li>
                        <li><a href="#">Application Maintenance &amp; Support</a></li>
                    </ul>
                </div>
                <div class="link-col">
                    <h4>Solutions</h4>
                    <ul>
                        <li><a href="#">KYC Data Extraction</a></li>
                        <li><a href="#">Workflow Automation</a></li>
                        <li><a href="#">System Integration</a></li>
                        <li><a href="#">Legacy Modernisation</a></li>
                        <li><a href="#">Cloud Migration</a></li>
                    </ul>
                </div>
                <div class="link-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Insights</a></li>
                        <li><a href="#">Careers <span class="badge">Hiring</span></a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="locations">Singapore &middot; Southeast Asia</div>
            <div class="copyright">&copy; iCube, all rights reserved, <?php echo date('Y'); ?></div>
            <ul class="legal-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">Terms of Use</a></li>
            </ul>
            <div class="language-selector">
                Region: <strong>Singapore (EN)</strong>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
