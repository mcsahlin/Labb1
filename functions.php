<?php

function load_styles()
{

	wp_register_style('labbett_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.7', 'all');
	wp_enqueue_style('labbett_bootstrap');

	wp_register_style(
		'labbett_fonts',
		get_template_directory_uri() . '/assets/css/font-awesome.css',
		array(get_template_directory_uri() . '/assets/fonts'),
		'4.6.3',
		'all'
	);
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

if (!function_exists('labbett_register_nav_menu')) {
	function labbett_register_nav_menu()
	{
		register_nav_menus(array(
			'primary_menu' => __('Primary Menu', 'text_domain'),
			'footer_menu' => __('Footer Menu', 'text_domain'),
		));
	}
}
add_action('after_setup_theme', 'labbett_register_nav_menu', 0);

function page()
{
	if (is_home()) {
		return "Blogg";
	} else if (is_archive()) {
		if (is_month()) :	return 'Arkiv: ' . ucfirst(single_month_title(" ", false));
		elseif (is_author()) : return get_the_author();
		elseif (is_category()) : return single_cat_title("", false);
		endif;
	} else if (is_search()) {
		return 'Sökresultat för: ' . get_search_query();
	} else if (is_404()) {
		return '404 - Sidan kunde inte hittas . . .';
	} else if (is_page()) {
		return the_title();
	} else {
		return '';
	}
}

function menu_desktop()
{
	$menu = wp_get_nav_menu_items('main-menu');
	wp_nav_menu(array(
		'theme_location' => 'primary_menu',
		'container' => 'nav' . ' ' . 'class="hidden-xs"',
		'container_id' => 'nav' . ' ' . 'class="hidden-xs"',
		'menu_class' => 'menu' . ' ' . 'class="hidden-xs"',
		'items_wrap' => '<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="%2$s">%3$s</ul>
				</div>
			</div>
		</div>',
		'add_li_class' => is_page() ? 'current-menu-item' : '',
	));
	return $menu;
}
