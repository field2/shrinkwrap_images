<?php
/**
 * Plugin Name: Shrinkwrap Images
 * Plugin URI: https://github.com/field2/shrinkwrap_images
 * Description: This plugin will help prevent image downloads.
 * Author: Ben Dunkle
 * Version: 1.2.2
 * Author URI: https://bendunkle.com/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @since 1.0.0
 * @package Shrinkwrap_Images
 */

defined( 'ABSPATH' ) or die();

/**
 * Enqueue items
 *
 * @since 1.0.0
 */
function eol_si_enqueue_script() {
	wp_enqueue_style(
		'swimgcss',
		plugin_dir_url( __FILE__ ) . 'shrinkwrap-images.css',
		array(),
		date( 'Ymd' )
	);

	wp_enqueue_script(
		'arrive',
		plugin_dir_url( __FILE__ ) . 'arrive.min.js',
		array(),
		date( 'Ymd' ),
		false
	);

	wp_register_script(
		'swimgjs',
		plugin_dir_url( __FILE__ ) . 'shrinkwrap-images.js',
		array( 'jquery' ),
		date( 'Ymd' ),
		true
	);

	wp_localize_script(
		'swimgjs',
		'php_vars',
		array( 'plugindir' => plugin_dir_url( __FILE__ ) . 'clear.gif' )
	);

	wp_enqueue_script( 'swimgjs' );
}

add_action( 'wp_enqueue_scripts', 'eol_si_enqueue_script' );
