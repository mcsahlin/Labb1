<?php

/*

  <link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_url') ?> . /assets/css/bootstrap.css' />
<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_url') ?> . /assets/css/font-awesome.css' />
<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_url') ?> . /style.css' />

*/
function load_styles()
{
wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.7', 'all');
wp_enqueue_style('bootstrap');

wp_register_style('fonts', get_template_directory_uri() . '/assets/css/font-awesome.css',
array(get_template_directory_uri() . '/assets/fonts'), '4.6.3', 'all');
wp_enqueue_style('fonts');

wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts()
{


wp_register_script('myJquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '3.1.0', 'all', false);
wp_enqueue_script('myJquery');

wp_register_script('myJs', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', 'all', true);
wp_enqueue_script('myJs');

}

add_action('wp_enqueue_scripts', 'load_scripts');


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
      'primary_menu' => __( 'Primary Menu', 'text_domain' ),
      'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
?>