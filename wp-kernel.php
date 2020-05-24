<?php declare(strict_types=1);

namespace Wordpress\Kernel;

/**
 * Plugin Name:       Wordpress kernel
 * Description:       WordPress Plugin that implements Symfony Http Kernel compatible Components
 * Plugin URI:        https://github.com/brianvarskonst/wp-kernel
 * Author:            Brianvarskonst
 * Author URI:        https://github.com/brianvarskonst
 * Version:           1.0.0
 * License:           MIT
 * Text Domain:       wp-kernel
 * Requires PHP:      7.4
 */

if (! defined('ABSPATH')) {
    return;
}

if (!file_exists(__DIR__ . '/vendor/autoload.php') || !is_readable(__DIR__ . '/vendor/autoload.php')) {
    $template = '%s: ';

    if (PHP_SAPI !== 'cli') {
        $template = '<h2>%s</h2>';
        header('Content-type: text/html; charset=utf-8', true, 503);
    }

    echo sprintf($template, 'Error');
    echo "Please execute \"composer install\" from the command line to install the required dependencies\n";

    echo sprintf($template, 'Fehler');
    echo "Bitte führen Sie zuerst \"composer install\" aus um alle benötigten Abhängigkeiten zu installieren.\n";
    return;
}

require __DIR__ . '/vendor/autoload.php';

