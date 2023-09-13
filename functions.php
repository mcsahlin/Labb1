<?php
// Get all wordpress hooks



function labbett_register_styles()
{
  wp_enqueue_style('labbet-bootstrap', get_template_directory_uri() . './style.css', array(), '1.0', 'all');
  wp_enqueue_style('labbet-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3', 'all');
  wp_enqueue_style('labbet-style', get_stylesheet_uri(), array('labbet-bootstrap'), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'labbett_register_styles');

?>