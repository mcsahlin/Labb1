<?php

function load_styles()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.7', 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('fonts', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.6.3', 'all');
  wp_enqueue_style('fonts');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts()
{

  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery');

  wp_register_script('js', get_template_directory_uri() . '/assets/js/script.js', array(), 1,1,1);
  wp_enqueue_script('js');

}

add_action('wp_enqueue_scripts', 'load_scripts');

?>