<?php
/**
 * Front to the WordPress application.
 * Lives at repo root so the site resolves at /icube not /icube/wordpress.
 * WP_HOME  = http://wugweb.design/icube          (public URL)
 * WP_SITEURL = http://wugweb.design/icube/wordpress (where WP files live)
 */
define( 'WP_USE_THEMES', true );
require __DIR__ . '/wordpress/wp-blog-header.php';
