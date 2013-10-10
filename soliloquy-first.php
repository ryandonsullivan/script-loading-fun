<?php
/*
Plugin Name: Soliloquy Slider First
Plugin URI: http://www.wpsitecare.com
Description: Plugin to force the soliloquy .js to load before widgets
Version: 0.1
Author: WP Site Care
Author URI: http://www.wpsitecare.com
License: GPL 2.0
License URI: 
*/

add_action( 'init', 'tgm_soliloquy_script_in_header' );
	
function tgm_soliloquy_script_in_header() {
 
	wp_deregister_script( 'soliloquy-script' );
	wp_register_script( 'soliloquy-script', plugins_url( 'js/soliloquy.js', 'soliloquy/soliloquy.php' ), array( 'jquery' ), Tgmsp::get_instance()->version );
	wp_enqueue_script( 'soliloquy-script' );
 
}