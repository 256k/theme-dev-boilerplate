<?php

function addResources() {
  // wp_enqueue_style('https://cdn.jsdelivr.net/foundation/6.2.4-rc2/foundation.min.css', get_stylesheet_uri());
  // wp_enqueue_style('foundation', get_template_directory_uri() .'/sass/foundation.min.css', array(), null, 'all');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/_vendor/jquery.js' );
  wp_enqueue_script( 'app', get_template_directory_uri() .'/js/app.js' );
}

add_action('wp_enqueue_scripts', 'addResources');



// <!-- Navigation menus -->
//
register_nav_menus(array(
  'nav' => __("Navigation Menu"),
  'footer' => __("footer Menu"),

));
