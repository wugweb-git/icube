<?php
/**
 * Component: Stat Bubble
 * Figma: stat cards inside "Frame 202" case studies section (256:2681 > li.flex items)
 * Two variants: light (#f0f0f0) and blue (#e6f0fa)
 * Recycled on: homepage case studies, /case-studies, /about
 *
 * $args:
 *   number  string  e.g. "+60%"
 *   label   string  e.g. "process efficiency"
 *   variant string  'light' | 'blue'
 */
$number  = $args['number']  ?? '';
$label   = $args['label']   ?? '';
$variant = $args['variant'] ?? 'light';
?>
<div class="stat-bubble stat-bubble--<?php echo esc_attr( $variant ); ?>">
    <strong class="stat-bubble__number"><?php echo esc_html( $number ); ?></strong>
    <span  class="stat-bubble__label"><?php echo esc_html( $label ); ?></span>
</div>
