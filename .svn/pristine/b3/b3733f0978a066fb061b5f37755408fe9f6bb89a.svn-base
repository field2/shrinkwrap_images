<?php
/**
 * @package ShrinkWrap_Images
 * @version 1.0
 */
/*
Plugin Name: Shrinkwrap Images
Plugin URI: https://github.com/field2/shrinkwrap_images
Description: This plugin will help prevent image downloads.
Author: Ben Dunkle
Version: 1.0
Author URI: http://bendunkle.com/
*/

function eol_si_enqueue_script() {
	wp_enqueue_style( 'swimgcss', plugin_dir_url(__FILE__) . 'shrinkwrap_images.css' ); 
	wp_register_script( 'swimgjs', plugin_dir_url(__FILE__) . 'shrinkwrap_images.js', array( 'jquery' ) );
	wp_enqueue_script( 'swimgjs');
	$url = plugin_dir_url(__FILE__) . 'shrinkwrap_images.js';
	$dataToBePassed = array(
		'plugindir' => plugin_dir_url(__FILE__) . 'clear.gif'
	);
	wp_localize_script( 'swimgjs', 'php_vars', $dataToBePassed );
}
add_action( 'wp_enqueue_scripts', 'eol_si_enqueue_script' );
?>