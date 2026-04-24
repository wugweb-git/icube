<?php
/**
 * Plugin Name: iCube PSR-4 Autoloader
 * Description: Simple PSR-4 autoloader for project-specific namespaces.
 */

if (!defined('ABSPATH')) {
    exit;
}

spl_autoload_register(static function (string $class): void {
    $prefixes = [
        'ICube\\' => dirname(__DIR__) . '/plugins/icube-custom/src/',
        'ICubeTheme\\' => dirname(__DIR__) . '/themes/icube-cms-theme/src/',
    ];

    foreach ($prefixes as $prefix => $baseDir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            continue;
        }

        $relativeClass = substr($class, $len);
        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});
