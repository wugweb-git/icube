<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', static function (): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'icube-cms-theme'),
    ]);
});

add_action('wp_enqueue_scripts', static function (): void {
    // Load Inter from Google Fonts and the theme stylesheet
    wp_enqueue_style('icube-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap', [], null);
    wp_enqueue_style(
        'icube-cms-theme-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
});

add_action('customize_register', static function (WP_Customize_Manager $wp_customize): void {
    $wp_customize->add_section('icube_homepage', [
        'title' => __('Homepage Content', 'icube-cms-theme'),
        'priority' => 30,
    ]);

    $fields = [
        'icube_eyebrow' => ['label' => 'Hero Eyebrow', 'default' => 'Digital Product Studio'],
        'icube_hero_title' => ['label' => 'Hero Title', 'default' => 'Build impact-focused digital experiences with iCube.'],
        'icube_hero_copy' => ['label' => 'Hero Description', 'default' => 'We partner with ambitious teams to launch scalable websites, products, and growth systems powered by modern engineering and design.'],
        'icube_primary_cta_text' => ['label' => 'Primary CTA Text', 'default' => 'Start a project'],
        'icube_primary_cta_link' => ['label' => 'Primary CTA Link', 'default' => '/contact'],
        'icube_secondary_cta_text' => ['label' => 'Secondary CTA Text', 'default' => 'View case studies'],
        'icube_secondary_cta_link' => ['label' => 'Secondary CTA Link', 'default' => '/blog'],
    ];

    foreach ($fields as $id => $config) {
        $wp_customize->add_setting($id, [
            'default' => $config['default'],
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        $wp_customize->add_control($id, [
            'label' => __($config['label'], 'icube-cms-theme'),
            'section' => 'icube_homepage',
            'type' => 'text',
        ]);
    }
});

function icube_theme_setting(string $id, string $fallback): string
{
    $value = get_theme_mod($id, $fallback);
    return is_string($value) && $value !== '' ? $value : $fallback;
}
