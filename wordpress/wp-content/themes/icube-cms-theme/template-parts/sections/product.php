<?php
/**
 * Section: Product Feature Banner (KYC)
 * Figma: "Frame 33" — 256:2682, y=2725, h=552
 * bg: #001b3e with texture overlay (mix-blend: color-dodge, opacity 10%)
 * Layout: left copy (flex-1) | right illustration (511px wide SVG)
 * Check icon:  http://localhost:3845/assets/19955e7bcd13fd5e08f4417cc23fb93a915aca47.svg
 * Illustration: complex SVG from Figma node 256:2714
 * Images needed:
 *   bg-texture.png       (Figma: 474c485e9490d5c56b9d86cb847ed167c5a5f1ab.png)
 *   icon-check.svg       (Figma: 19955e7bcd13fd5e08f4417cc23fb93a915aca47.svg)
 *   kyc-illustration.svg (export Figma node 256:2714)
 */
$img    = get_template_directory_uri() . '/assets/images';
$icons  = $img . '/icons';

$features = [
    'NRIC / Passport extraction',
    'ACRA BizFile processing',
    'Bank statement parsing',
    'Export to structured formats',
];
?>
<section class="product-banner" aria-labelledby="product-title">
    <div class="product-banner__bg"
         style="background-image:url('<?php echo esc_url($img); ?>/bg-texture.png')"
         aria-hidden="true"></div>
    <div class="product-banner__inner">
        <!-- Left: copy -->
        <div class="product-banner__left">
            <h2 class="product-banner__title" id="product-title">
                KYC Data Extraction for Corporate Secretaries
            </h2>
            <p class="product-banner__desc">
                Extract structured data from Singapore company documents to streamline
                compliance and onboarding workflows.
            </p>
            <ul class="product-banner__list" role="list">
                <?php foreach ( $features as $f ) : ?>
                <li>
                    <img src="<?php echo esc_url($icons); ?>/icon-check.svg"
                         alt="" width="18" height="18" aria-hidden="true">
                    <?php echo esc_html( $f ); ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <a href="/product" class="btn btn--white">Explore Product</a>
        </div>
        <!-- Right: illustration -->
        <div class="product-banner__right" aria-hidden="true">
            <img src="<?php echo esc_url($img); ?>/kyc-illustration.svg"
                 alt="KYC data extraction diagram" loading="lazy">
        </div>
    </div>
</section>
