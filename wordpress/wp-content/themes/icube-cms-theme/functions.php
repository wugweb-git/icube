<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/* ─── Theme Setup ───────────────────────────────────────────────────── */
add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    register_nav_menus([
        'primary' => __( 'Primary Menu', 'icube-cms-theme' ),
    ]);
});

/* ─── Enqueue ───────────────────────────────────────────────────────── */
add_action( 'wp_enqueue_scripts', function () {
    $ver = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'icube-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap',
        [], null
    );
    wp_enqueue_style(
        'icube-style',
        get_stylesheet_uri(),
        [ 'icube-fonts' ],
        $ver
    );
    wp_enqueue_script(
        'icube-nav',
        get_template_directory_uri() . '/assets/js/nav.js',
        [], $ver, true
    );
});

/* ─── Register CPT: Insight (blog) ─────────────────────────────────── */
add_action( 'init', function () {
    register_post_type( 'insight', [
        'label'               => 'Insights',
        'public'              => true,
        'show_in_rest'        => true,
        'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'has_archive'         => true,
        'rewrite'             => [ 'slug' => 'insights' ],
        'menu_icon'           => 'dashicons-welcome-learn-more',
    ]);

    register_post_type( 'case_study', [
        'label'               => 'Case Studies',
        'public'              => true,
        'show_in_rest'        => true,
        'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'has_archive'         => true,
        'rewrite'             => [ 'slug' => 'case-studies' ],
        'menu_icon'           => 'dashicons-groups',
    ]);
});

/* ─── Customizer ────────────────────────────────────────────────────── */
add_action( 'customize_register', function ( WP_Customize_Manager $wp_customize ) {
    $wp_customize->add_section( 'icube_hero', [
        'title'    => 'Hero Section',
        'priority' => 30,
    ]);
    $fields = [
        'icube_hero_eyebrow' => [ 'label' => 'Eyebrow text',      'default' => 'Teams across enterprise and regulated industries' ],
        'icube_hero_title'   => [ 'label' => 'Hero title',        'default' => 'Enterprise Applications Built Faster with Low-Code. Time is money.' ],
        'icube_hero_sub'     => [ 'label' => 'Hero subtitle',     'default' => 'We design and deliver scalable enterprise systems using OutSystems and modern technologies for organizations across Singapore and Southeast Asia.' ],
        'icube_cta_consult'  => [ 'label' => 'CTA: Consultation URL', 'default' => '/book-consultation' ],
        'icube_cta_services' => [ 'label' => 'CTA: Services URL', 'default' => '/services' ],
    ];
    foreach ( $fields as $id => $cfg ) {
        $wp_customize->add_setting( $id, [ 'default' => $cfg['default'], 'sanitize_callback' => 'sanitize_text_field' ]);
        $wp_customize->add_control( $id, [ 'label' => $cfg['label'], 'section' => 'icube_hero', 'type' => 'text' ]);
    }
});

function icube_mod( string $id, string $fallback = '' ): string {
    $v = get_theme_mod( $id, $fallback );
    return ( is_string( $v ) && $v !== '' ) ? $v : $fallback;
}
