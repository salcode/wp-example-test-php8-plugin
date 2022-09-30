<?php
/**
 * Plugin Name:       Example Test PHP8 Plugin
 * Plugin URI:        https://github.com/salcode/wp-example-test-php8-plugin
 * Description:       An example plugin for testing for PHP8 compatibility, specifically with code incompatible with PHP8
 * Version:           0.1.0
 * Requires at least: 6.0.0
 * Requires PHP:      7.4
 * Author:            Sal Ferrarello
 * Author URI:        https://salferrarello.com/
 * License:           MIT
 * License URI:       https://mit-license.org/
 * Text Domain:       wp-example-test-php8-plugin
 * Domain Path:       /languages
 */

namespace salcode\WpExampleTestPhp8;

use WP_REST_Server;

if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

/**
 * Register routes for REST API.
 */
function register_rest_api_routes() {
	register_rest_route(
		'wp-example-test-php8-plugin/v1',
		'/site-title',
		[
			'callback' => function() {
				return 'hello world';
			},
			'methods' => WP_REST_Server::READABLE,
			'permission_callback' => '__return_true',
		]
	);
}

add_action(
	'rest_api_init',
	__NAMESPACE__ . '\register_rest_api_routes'
);
