<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main>

    <!-- ===== HERO (Figma node 256:1227) ===== -->
    <section class="hero-split">
        <!-- Left: dark navy text panel -->
        <div class="hero-left">
            <div class="hero-inner">
                <div class="hero-bg-overlay"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.png');"></div>
                <div class="hero-content">
                    <div class="hero-eyebrow">
                        <svg class="star-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6L12 2z" fill="#BFD6F2"/>
                        </svg>
                        <span class="eyebrow-text">Trusted by <span class="eyebrow-highlight">Teams across enterprise and regulated industries</span></span>
                    </div>
                    <h1 class="hero-title">Enterprise Applications Built Faster with Low-Code.<br>Time is money.</h1>
                    <p class="hero-sub">We design and deliver scalable enterprise systems using OutSystems and modern technologies for organizations across Singapore and Southeast Asia.</p>
                    <div class="hero-cta">
                        <a href="#contact" class="btn btn-blue">Book Consultation</a>
                        <a href="#services" class="btn btn-white-solid">View Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right: illustration + floating stat card -->
        <div class="hero-right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-illustration.png"
                 alt="Enterprise platform dashboard"
                 class="hero-illustration" />
            <!-- Floating 30K stat card (Figma node 256:1248) -->
            <div class="hero-stat-card">
                <div class="stat-avatars">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-1.png" alt="" class="stat-avatar" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-2.png" alt="" class="stat-avatar" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-3.png" alt="" class="stat-avatar" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-4.png" alt="" class="stat-avatar" />
                </div>
                <div class="stat-text">
                    <span class="stat-number">30K</span>
                    <span class="stat-label">Happy customer we have world-wide.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TRUSTED BRANDS MARQUEE (Figma node 256:1258) ===== -->
    <section class="trusted-section">
        <p class="trusted-heading">Built by teams with experience across</p>
        <div class="marquee-wrapper">
            <div class="marquee-fade marquee-fade-left"></div>
            <div class="marquee-fade marquee-fade-right"></div>
            <div class="marquee-track">
                <?php
                $logos = [
                    ['src' => 'microsoft.png',    'alt' => 'Microsoft'],
                    ['src' => 'google.png',        'alt' => 'Google'],
                    ['src' => 'accenture.png',     'alt' => 'Accenture'],
                    ['src' => 'goldman-sachs.png', 'alt' => 'Goldman Sachs'],
                    ['src' => 'ibm.png',           'alt' => 'IBM'],
                ];
                $all_logos = array_merge($logos, $logos); // duplicate for seamless loop
                foreach ($all_logos as $logo): ?>
                <div class="marquee-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/<?php echo esc_attr($logo['src']); ?>"
                         alt="<?php echo esc_attr($logo['alt']); ?>"
                         class="marquee-logo" />
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== SERVICES (Figma node 256:1138 + 256:1146) ===== -->
    <section class="services-section" id="services">
        <div class="services-header-block">
            <span class="services-eyebrow">Services</span>
            <h2 class="services-title">Get to know iCube</h2>
            <p class="services-desc">End-to-end digital transformation, from strategy to enterprise application delivery.</p>
        </div>

        <div class="services-cards">
            <!-- Row 1: Two wide cards -->
            <div class="services-row services-row-2">
                <div class="svc-card">
                    <div class="svc-card-text">
                        <div class="svc-card-info">
                            <h3 class="svc-title">Digital Transformation Consulting</h3>
                            <p class="svc-desc">Define strategy, roadmap, and execution for enterprise systems.</p>
                        </div>
                        <a href="#" class="svc-link">Learn more
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="svc-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/digital-transformation.png"
                             alt="Digital Transformation Consulting" />
                    </div>
                </div>
                <div class="svc-card">
                    <div class="svc-card-text">
                        <div class="svc-card-info">
                            <h3 class="svc-title">OutSystems Development</h3>
                            <p class="svc-desc">Build and deploy scalable low-code applications faster.</p>
                        </div>
                        <a href="#" class="svc-link">Learn more
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="svc-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/outsystems.png"
                             alt="OutSystems Development" />
                    </div>
                </div>
            </div>

            <!-- Row 2: Three equal cards -->
            <div class="services-row services-row-3">
                <div class="svc-card">
                    <div class="svc-card-text">
                        <div class="svc-card-info">
                            <h3 class="svc-title">Enterprise Application Development</h3>
                            <p class="svc-desc">Custom web and enterprise systems tailored to business workflows.</p>
                        </div>
                        <a href="#" class="svc-link">Learn more
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="svc-card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/enterprise-app.png"
                             alt="Enterprise Application Development" />
                    </div>
                </div>
                <div class="svc-card">
                    <div class="svc-card-text">
                        <div class="svc-card-info">
                            <h3 class="svc-title">Mobile App Development</h3>
                            <p class="svc-desc">Native and cross-platform mobile applications.</p>
                        </div>
                        <a href="#" class="svc-link">Learn more
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="svc-card-img svc-card-img--fade">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/mobile-app.png"
                             alt="Mobile App Development" />
                    </div>
                </div>
                <div class="svc-card">
                    <div class="svc-card-text">
                        <div class="svc-card-info">
                            <h3 class="svc-title">Application Maintenance &amp; Support</h3>
                            <p class="svc-desc">Continuous monitoring, optimization, and system enhancements.</p>
                        </div>
                        <a href="#" class="svc-link">Learn more
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="svc-card-img svc-card-img--fade">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/maintenance.png"
                             alt="Application Maintenance &amp; Support" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="split-section">
        <div class="split-half left testi-1">
            <h3>iCube enabled us to move from fragmented systems to a structured digital platform.<br/>The team focused on execution, not just strategy.</h3>
            <div class="t-stats">
                <div class="t-stat">
                    <h4>+60%</h4>
                    <p>process efficiency</p>
                </div>
                <div class="t-stat">
                    <h4>-95%</h4>
                    <p>manual workload</p>
                </div>
            </div>
            <a href="#" class="btn btn-primary">Book Consultation</a>
        </div>
        <div class="split-half right kyc-product">
            <h2>KYC Data Extraction for Corporate Secretaries</h2>
            <p>Extract structured data from Singapore company documents to streamline compliance and onboarding workflows.</p>
            <ul class="kyc-list">
                <li>NRIC / Passport extraction</li>
                <li>ACRA BizFile processing</li>
                <li>Bank statement parsing</li>
                <li>Export to structured formats</li>
            </ul>
            <a href="#" class="btn btn-white">Explore Product</a>
        </div>
    </section>

    <section class="why-icube">
        <div class="container">
            <h2>Why iCube</h2>
            <div class="why-grid">
                <div class="why-card dark">
                    <h3>Low-Code Expertise</h3>
                    <p>Rapid development using OutSystems and modern platforms.</p>
                </div>
                <div class="why-card light">
                    <h3>Enterprise Focus</h3>
                    <p>Built for complex systems, integrations, and scale.</p>
                </div>
                <div class="why-card dark">
                    <h3>Faster Delivery</h3>
                    <p>Reduced timelines compared to traditional development.</p>
                </div>
                <div class="why-card light">
                    <h3>Execution-Driven</h3>
                    <p>Clear approach from planning to deployment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="industries">
        <div class="container ind-container">
            <div class="ind-header">
                <h2>Industries<br/>We Serve</h2>
                <p>Enterprise systems built for <br/>industry-specific workflows.</p>
            </div>
            <div class="ind-list">
                <div class="ind-item">
                    <h3>Logistics</h3>
                    <p>Tracking systems and operational workflows</p>
                </div>
                <div class="ind-item">
                    <h3>Insurance</h3>
                    <p>Policy, claims, and customer management systems</p>
                </div>
                <div class="ind-item">
                    <h3>Transportation</h3>
                    <p>Fleet and operational systems</p>
                </div>
                <div class="ind-item">
                    <h3>Manufacturing</h3>
                    <p>Plant operations, workflow, and system digitization</p>
                </div>
                <div class="ind-item">
                    <h3>Public Sector</h3>
                    <p>Citizen services and internal platforms</p>
                </div>
            </div>
        </div>
    </section>

    <section class="split-section" id="contact">
        <div class="split-half left cta-section">
            <div class="eyebrow">30 minutes. Your content. Live Results.</div>
            <h2>Start your digital <br/>transformation</h2>
            <p>Discuss your systems, workflows, and requirements<br/>with our team.</p>
            <form class="cta-form">
                <input type="email" placeholder="Work email">
                <button type="button" class="btn btn-white">Book Consultation</button>
            </form>
            <div class="disclaimer">No sales pressure. Focused discussion on your requirements.</div>
        </div>
        <div class="split-half right testi-2">
            <p class="quote">"Our team moves faster because they know exactly what's compliant. And our compliance team finally focuses on real work, not chasing down emails."</p>
            <div class="author">
                <h4>Head of compliance</h4>
                <span>Large Broker-Dealer</span>
            </div>
        </div>
    </section>

    <section class="insights">
        <div class="container">
            <div class="insights-header">
                <div>
                    <h2>Insights</h2>
                    <p>Perspectives on enterprise systems, low-code, and <br/>digital transformation.</p>
                </div>
                <a href="#">View All Insights &rarr;</a>
            </div>
            <div class="insights-grid">
                <?php for($i=0; $i<4; $i++): ?>
                <div class="insight-card">
                    <span class="category">Low-Code Development</span>
                    <h3>Low-Code vs Traditional Development: What Enterprises Should Consider</h3>
                    <p>A comparison of development approaches and how low-code platforms impact delivery timelines and scalability.</p>
                    <a href="#" class="read-more">Read Article &rarr;</a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
