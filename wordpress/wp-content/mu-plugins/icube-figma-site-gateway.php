<?php
/**
 * Plugin Name: iCube Figma Site Gateway
 * Description: Optionally redirects public WordPress traffic to the published Figma site while keeping admin/API paths available.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('template_redirect', static function (): void {
    $redirectEnabled = getenv('ICUBE_ENABLE_FIGMA_REDIRECT');
    if (!is_string($redirectEnabled) || !in_array(strtolower($redirectEnabled), ['1', 'true', 'yes', 'on'], true)) {
        return;
    }

    if (is_admin()) {
        return;
    }

    if (defined('REST_REQUEST') && REST_REQUEST) {
        return;
    }

    $requestUri = $_SERVER['REQUEST_URI'] ?? '/';

    $excludedPrefixes = [
        '/wp-admin',
        '/wp-login.php',
        '/wp-json',
        '/xmlrpc.php',
        '/wp-cron.php',
    ];

    foreach ($excludedPrefixes as $prefix) {
        if (str_starts_with($requestUri, $prefix)) {
            return;
        }
    }

    $method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
    if (!in_array($method, ['GET', 'HEAD'], true)) {
        return;
    }

    $targetUrl = getenv('ICUBE_FIGMA_SITE_URL') ?: 'https://icube-website.figma.site/';

    wp_safe_redirect($targetUrl, 302);
    exit;
});
