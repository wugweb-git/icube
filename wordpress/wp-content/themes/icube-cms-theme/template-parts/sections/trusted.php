<?php
/**
 * Section: Trusted Brands Marquee
 * Figma: "div.home-trusted-wrapper" — 256:1258, y=680, h=243
 * 5 logos × 2 (duplicate for seamless CSS loop): Microsoft, Google, Accenture, Goldman Sachs, IBM
 * Each marquee item: 240×96px white/50% card with 144×41px logo
 * Images needed: logos/microsoft.png, google.png, accenture.png, goldman-sachs.png, ibm.png
 */
$base = get_template_directory_uri() . '/assets/images/logos';
$logos = [
    [ 'src' => 'microsoft.png',    'alt' => 'Microsoft' ],
    [ 'src' => 'google.png',       'alt' => 'Google' ],
    [ 'src' => 'accenture.png',    'alt' => 'Accenture' ],
    [ 'src' => 'goldman-sachs.png','alt' => 'Goldman Sachs' ],
    [ 'src' => 'ibm.png',          'alt' => 'IBM' ],
];
$all = array_merge( $logos, $logos ); // duplicate for seamless animation
?>
<section class="trusted" aria-label="Trusted by teams with experience across">
    <p class="trusted__heading">Built by teams with experience across</p>
    <div class="trusted__viewport" aria-hidden="true">
        <div class="trusted__fade trusted__fade--l"></div>
        <div class="trusted__fade trusted__fade--r"></div>
        <div class="trusted__track marquee-track">
            <?php foreach ( $all as $logo ) : ?>
            <div class="trusted__item">
                <img src="<?php echo esc_url( $base . '/' . $logo['src'] ); ?>"
                     alt="<?php echo esc_attr( $logo['alt'] ); ?>"
                     loading="lazy">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
