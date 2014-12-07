<?php

/*
Plugin Name: Surbma - Twitter Bootstrap 2
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Twitter Bootstrap 2 styles.

Version: 1.5.2

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-twitter-bootstrap-2
Domain Path: /languages/
*/

// Localization
function surbma_twitter_bootstrap_2_init() {
	load_plugin_textdomain( 'surbma-twitter-bootstrap-2', false, dirname( plugin_basename( __FILE__ ) . '/languages/' ) );
}
add_action( 'init', 'surbma_twitter_bootstrap_2_init' );

function surbma_twitter_bootstrap_2_scripts() {
?><script type="text/javascript">
	!function ($) {
		$(function() {
			$(".tip").tooltip()
			$(".pop").popover()
		})
	}(window.jQuery)
</script><?php
}
add_action( 'wp_footer', 'surbma_twitter_bootstrap_2_scripts' );

function surbma_twitter_bootstrap_2_enqueue_scripts() {
	wp_enqueue_script( 'bootstrap-2-scripts', plugins_url( '', __FILE__ ) . '/js/bootstrap.min.js', array( 'jquery' ), '2.3.1', true );
	wp_enqueue_style( 'bootstrap-2-styles', plugins_url( '', __FILE__ ) . '/css/bootstrap.min.css', false, '2.3.1' );
}
add_action( 'wp_enqueue_scripts', 'surbma_twitter_bootstrap_2_enqueue_scripts' );

global $allowedposttags;
$allowedposttags['a'] = array(
	'href' => array(),
	'rel' => array(),
	'rev' => array(),
	'name' => array(),
	'target' => array(),
	'data-animation' => array(),
	'data-html' => array(),
	'data-placement' => array(),
	'data-selector' => array(),
	'data-trigger' => array(),
	'data-title' => array(),
	'data-delay' => array(),
	'data-container' => array(),
	'data-toggle' => array(),
	'data-target' => array(),
	'data-content' => array(),
	'data-parent' => array(),
	'data-dismiss' => array()
);
$allowedposttags = array_map( '_wp_add_global_attributes', $allowedposttags );
