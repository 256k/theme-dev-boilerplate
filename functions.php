<?php

function addResources() {
  wp_enqueue_style('https://cdn.jsdelivr.net/foundation/6.2.4-rc2/foundation.min.css', get_stylesheet_uri());
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'addResources');



// <!-- Navigation menus -->
//
register_nav_menus(array(
  'nav' => __("Navigation Menu"),
  'footer' => __("footer Menu"),

));
