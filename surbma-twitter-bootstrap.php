<?php

/*
Plugin Name: Surbma - Twitter Bootstrap
Plugin URI: http://surbma.com/
Description: Twitter Bootstrap styles
Version: 130116.1
Author: Surbma
Author URI: http://surbma.com/
License: GPL2
*/

function surbma_tb_scripts() {
	?><script type="text/javascript">
  	!function ($) {
  		$(function() {
  			$(".tip").tooltip()
  			$(".pop").popover()
  		})
  	}(window.jQuery)
  </script><?php
}
add_action( 'wp_footer', 'surbma_tb_scripts' );

function surbma_tb_enqueue_scripts() {
	wp_enqueue_script( 'bootstrap-scripts', plugins_url( '', __FILE__ ) . '/js/bootstrap.min.js', array('jquery'), '2.2.2', true );
  wp_enqueue_style( 'bootstrap-styles', plugins_url( '', __FILE__ ) . '/css/bootstrap.min.css', false, '2.2.2' );
}
add_action( 'wp_enqueue_scripts', 'surbma_tb_enqueue_scripts' );

