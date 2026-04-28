<?php
/**
 * Homepage — iCube
 * Figma: Desktop.svg — node 256:1137 "Desktop", 1280×6533px
 *
 * Section order (Figma y positions):
 *  y=  80  Hero              "9"          (256:1227)
 *  y= 680  Trusted brands               (256:1258)
 *  y= 923  Services bento    "11"        (256:1479)
 *  y=2123  Case studies      "Frame 202" (256:2680)
 *  y=2725  Product banner    "Frame 33"  (256:2682)
 *  y=3277  Why iCube         "12"        (256:2779)
 *  y=3897  Industries        "10"        (256:2790)
 *  y=4583  CTA banner        "Frame 34"  (256:2804)
 *  y=5124  Insights/Blog     "section.m-2" (256:2806)
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main id="main" role="main">
    <?php get_template_part( 'template-parts/sections/hero' ); ?>
    <?php get_template_part( 'template-parts/sections/trusted' ); ?>
    <?php get_template_part( 'template-parts/sections/services' ); ?>
    <?php get_template_part( 'template-parts/sections/case-studies' ); ?>
    <?php get_template_part( 'template-parts/sections/product' ); ?>
    <?php get_template_part( 'template-parts/sections/why-icube' ); ?>
    <?php get_template_part( 'template-parts/sections/industries' ); ?>
    <?php get_template_part( 'template-parts/sections/cta' ); ?>
    <?php get_template_part( 'template-parts/sections/insights' ); ?>
</main>
<?php get_footer(); ?>
