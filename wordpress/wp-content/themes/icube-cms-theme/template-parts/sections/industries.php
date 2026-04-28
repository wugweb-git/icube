<?php
/**
 * Section: Industries We Serve
 * Figma: "10" — 256:2790, y=3897, h=686
 * bg: #f0f0f0 (--surface/default)
 * Layout: CSS grid 3-col — col-1 row-1 = heading cell, remaining 5 cells = industry cards
 *   Card order in Figma (col,row): Logistics(2,2) Insurance(3,1) Transportation(2,1)
 *                                   Manufacturing(3,2) Public Sector(1,2) Heading(1,1)
 *   Rendered order for HTML: heading, then 5 cards
 * Component: template-parts/components/industry-card.php
 * Icons — export from Figma:
 *   icons/icon-logistics.svg       (8467687adcbb7814ff5485a9d6738dcee6a12dd8.svg)
 *   icons/icon-insurance.svg       (89644cc7d9ded77316548337ea4c2e8b3f251940.svg)
 *   icons/icon-transportation.svg  (eccd8ea7857ea1e16bc6ada0228a2b10423b301e.svg)
 *   icons/icon-manufacturing.svg   (99f83f3d21d272a208116adaa5de5a9f2e5ce437.svg)
 *   icons/icon-public-sector.svg   (99be84fbca70ac383d8961932bf0230cbe1ad619.svg)
 */
$icons = get_template_directory_uri() . '/assets/images/icons';

$industries = [
    [
        'title' => 'Transportation',
        'desc'  => 'Fleet and operational systems',
        'icon'  => $icons . '/icon-transportation.svg',
        'link'  => '/solutions/transportation',
    ],
    [
        'title' => 'Insurance',
        'desc'  => 'Policy, claims, and customer management systems',
        'icon'  => $icons . '/icon-insurance.svg',
        'link'  => '/solutions/insurance',
    ],
    [
        'title' => 'Logistics',
        'desc'  => 'Tracking systems and operational workflows',
        'icon'  => $icons . '/icon-logistics.svg',
        'link'  => '/solutions/logistics',
    ],
    [
        'title' => 'Manufacturing',
        'desc'  => 'Plant operations, workflow, and system digitization',
        'icon'  => $icons . '/icon-manufacturing.svg',
        'link'  => '/solutions/manufacturing',
    ],
    [
        'title' => 'Public Sector',
        'desc'  => 'Citizen services and internal platforms',
        'icon'  => $icons . '/icon-public-sector.svg',
        'link'  => '/solutions/public-sector',
    ],
];
?>
<section class="industries" aria-labelledby="ind-title">
    <div class="industries__grid">
        <!-- Heading cell occupies col-1 row-1 in the 3-col Figma grid -->
        <div class="industries__heading-cell">
            <h2 class="industries__title" id="ind-title">Industries<br>We Serve</h2>
            <p  class="industries__desc">Enterprise systems built for<br>industry-specific workflows.</p>
        </div>
        <!-- 5 industry cards fill remaining grid cells -->
        <?php foreach ( $industries as $ind ) :
            get_template_part( 'template-parts/components/industry-card', null, $ind );
        endforeach; ?>
    </div>
</section>
