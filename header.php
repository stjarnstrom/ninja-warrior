<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ninja Warrior
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>    
    
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,900' rel='stylesheet' type='text/css'> <!-- font -->    
</head>

<body <?php body_class(); ?>>
<nav id="off-canvas-navigation" class="off-canvas-navigation" role="navigation">			
    <?php wp_nav_menu( array( 'theme_location' => 'off-canvas', 'container' => 'div', 'container_id' => 'off-canvas-menu' ) ); ?>
</nav>
<div id="page" class="hfeed site transparent-header inverted-header">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ninja-warrior' ); ?></a>

	<header id="header" class="site-header" role="banner">

		<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div><!-- .site-branding -->
        
		<nav id="main-navigation" class="main-navigation" role="navigation">			
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
    </header><!-- #header -->

    <div id="blocker" class="slideout"></div>
    <a id="hamburger" class="slideout" href="#menu"><span></span></a>
    
	<div id="content" class="site-content">
