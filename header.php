<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>" />

<title>

<?php wp_title('|', true, 'right'); ?>

<?php bloginfo('name'); if ( is_home() ) echo ' | The University'; ?>

</title>

<meta name="description" content="<?php bloginfo('description'); ?>" />

<meta name="viewport" content="width = device-width, initial-scale = 1.0">

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" 

media="screen,projection" />

<?php wp_head(); ?>

</head>

<body <?php body_class( ); ?>>

<div id="wrapper">

<div id="header" class="section">

<h1 class="header"> <a href="/"><?php bloginfo('name'); ?></a> </h1>

</div>

<div id="nav-top">

<?php wp_nav_menu(); ?>

</div>
