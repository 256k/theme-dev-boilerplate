<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo("name"); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <div class="menu-button">
    <
  </div>

<div class="row-full nav-row">


<div class="nav">

            <a href="<?php bloginfo('url'); ?>"><h1 class="nav-title"><?php bloginfo('name'); ?></h1></a>



            <?php

            $args = array(

              'theme_location' => 'nav'

            );

            wp_nav_menu( $args ); ?>


</div>

</div>
<!-- end of nav -->
