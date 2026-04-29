<?php
/**
 * WordPress configuration — iCube
 * Supports local Docker (localhost:8000) and production (wugweb.design/icube).
 */

// ── Database ─────────────────────────────────────────────────────────
define( 'DB_NAME',     'u544169507_icube' );
define( 'DB_USER',     'u544169507_icube' );
define( 'DB_PASSWORD', 'WugWeb123@' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// ── Environment detection ─────────────────────────────────────────────
// Local  → Docker container hostname is 'db'
// Prod   → Hostinger shared hosting uses 'localhost'
$is_local = ( isset( $_SERVER['HTTP_HOST'] ) && strpos( $_SERVER['HTTP_HOST'], 'localhost' ) !== false )
         || ( php_uname('n') === 'icube_wordpress' ); // Docker container name

if ( $is_local ) {
    define( 'DB_HOST',    'db' );   // Docker service name
    define( 'WP_HOME',    'http://localhost:8000' );
    define( 'WP_SITEURL', 'http://localhost:8000/wordpress' );
    define( 'WP_DEBUG',   true );
    define( 'WP_DEBUG_LOG',     true );
    define( 'WP_DEBUG_DISPLAY', false );
} else {
    define( 'DB_HOST',    'localhost' );  // Hostinger shared hosting
    define( 'WP_HOME',    'http://wugweb.design/icube' );
    define( 'WP_SITEURL', 'http://wugweb.design/icube/wordpress' );
    define( 'WP_DEBUG',   false );
}

// ── Auth keys & salts ────────────────────────────────────────────────
define( 'AUTH_KEY',         '<8p5rp?Acl%-!B3}F@j_SlD: Ftfu2@xN-TIO?esVIkkTUxIG=zet*JW{.;uSJNv' );
define( 'SECURE_AUTH_KEY',  'fqH%3E|0fk.1UP@WU4F%x#NECT6$_1Wf/6Fk@q2_94|r2V(avDoVz;ejNPwh.w8:' );
define( 'LOGGED_IN_KEY',    'Ej^6qiR`dwy?D3IKR:q]J^rR>AaV4]-]-)BF=z U3P&j; |hKF?.pU/HZ6|gLcL{' );
define( 'NONCE_KEY',        '(59vSW/tT)|B+(M-GOR+k7{> }rXQ$-`T#XKV 1MqE-{?k8x->gut`;ixw_$19:-' );
define( 'AUTH_SALT',        'Kl-#e9X|K =i++r.-WCt{Q!>WW/oucM(I1rg*nN@Cq4]8Zz+Wl0@8OTTqQJ8 n?k' );
define( 'SECURE_AUTH_SALT', 'o|o8}}v!]l*GOo,#|]4e@YCB]/^XJ(}HYZntn+z#B?#bHuBTw.r>zJ.T70$Q|vXp' );
define( 'LOGGED_IN_SALT',   '|SCIm~FTdfu!*r~%49fPYy+FI O{&?#[WY?4fHvG5in-d[+ECGdi2zG5oRLMA,&R' );
define( 'NONCE_SALT',       'rt(8k]H^IPzTAQ1Lh+N)>><Gtim5ki7;k4~jX+=A;(kwYYb7<4nF~w1q>ddH`E[q' );

$table_prefix = 'wp_';

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
