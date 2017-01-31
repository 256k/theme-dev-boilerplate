<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo("name"); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="top-bar">
    <div class="top-bar-title">
      <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
        <button class="menu-icon dark" type="button" data-toggle></button>
      </span>
      <strong>Site Title</strong>
    </div>
    <div id="responsive-menu">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li>
            <a href="#">One</a>
            <ul class="menu vertical">
              <li><a href="#">One</a></li>
              <li><a href="#">Two</a></li>
              <li><a href="#">Three</a></li>
            </ul>
          </li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><input type="search" placeholder="Search"></li>
          <li><button type="button" class="button">Search</button></li>
        </ul>
      </div>
    </div>
  </div>


<!--

<div class="row align-middle">


            <h1 class="nav-title column"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a>
      </h1>
      <div class="column">


            <?php

            $args = array(

              'theme_location' => 'nav'

            );

            wp_nav_menu( $args ); ?>
            </div>

</div> -->
<!-- end of nav -->
