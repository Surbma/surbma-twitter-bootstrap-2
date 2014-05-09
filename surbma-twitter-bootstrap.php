<?php

/*
Plugin Name: Surbma - Twitter Bootstrap
Plugin URI: http://surbma.com/
GitHub Plugin URI: Surbma/surbma-twitter-bootstrap
Description: Twitter Bootstrap styles
Version: 1.4.0
Author: Surbma
Author URI: http://surbma.com/
License: GPL2
*/

function surbma_twitter_bootstrap_scripts() {
?><script type="text/javascript">
	!function ($) {
		$(function() {
			$(".tip").tooltip()
			$(".pop").popover()
		})
	}(window.jQuery)
</script><?php
}
add_action( 'wp_footer', 'surbma_twitter_bootstrap_scripts' );

function surbma_twitter_bootstrap_enqueue_scripts() {
	wp_enqueue_script( 'bootstrap-scripts', plugins_url( '', __FILE__ ) . '/js/bootstrap.min.js', array( 'jquery' ), '2.3.1', true );
	wp_enqueue_style( 'bootstrap-styles', plugins_url( '', __FILE__ ) . '/css/bootstrap.min.css', false, '2.3.1' );
}
add_action( 'wp_enqueue_scripts', 'surbma_twitter_bootstrap_enqueue_scripts' );

global $allowedposttags;
$allowedposttags['a'] = array(
	'class' => array(),
	'id' => array(),
	'style' => array(),
	'title' => array(),
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
