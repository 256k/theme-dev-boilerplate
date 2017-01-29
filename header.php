<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="nav">
    <div class="dropdown">
        <!-- menu for mobile dropdown -->
    </div>
    <div class="nav-wrapper">
        <div class="nav-row">
            <h1 class="nav-title"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a>
      </h1>
            <?php

            $args = array(

              'theme_location' => 'nav'

            );

            wp_nav_menu( $args ); ?>
        </div>
        <!-- end of row -->
    </div>
    <!-- end of wrapper -->
</div>
<!-- end of nav -->
