<?php

function load_styles()
{

	wp_register_style('labbett_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.7', 'all');
	wp_enqueue_style('labbett_bootstrap');

	wp_register_style('labbett_fonts', get_template_directory_uri() . '/assets/css/font-awesome.css',
	array(get_template_directory_uri() . '/assets/fonts'), '4.6.3', 'all');
	wp_enqueue_style('labbett_fonts');

	wp_register_style('labbett_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
	wp_enqueue_style('labbett_style');

	wp_register_style('labbett_custom_style', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
	wp_enqueue_style('labbett_custom_style');

}
add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts()
{

	wp_register_script('labbett_jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '3.1.0', 'all', false);
	wp_enqueue_script('labbett_jquery');

	wp_register_script('labbett_js', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', 'all', true);
	wp_enqueue_script('labbett_js');

}
add_action('wp_enqueue_scripts', 'load_scripts');

if (!function_exists('labbett_register_nav_menu'))
{
	function labbett_register_nav_menu(){
		register_nav_menus(array(
      'primary_menu' => __( 'Primary Menu', 'text_domain' ),
      'footer_menu' => __( 'Footer Menu', 'text_domain' ),
		));
	}
	add_action('after_setup_theme', 'labbett_register_nav_menu', 0);
}



?>