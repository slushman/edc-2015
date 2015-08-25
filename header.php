<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DocBlock
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php

wp_head();

?></head>

<body <?php body_class(); ?>><?php

do_action( 'after_body' );

	?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edc-2015' ); ?></a>
	<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap wrap-header">
			<div class="site-branding"><?php

			if ( is_front_page() && is_home() ) {

				?><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><?php

			} else {

				?><p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p><?php

			}

				?><p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'edc-2015' ); ?></button><?php

					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );

			?></nav><!-- #site-navigation -->
		</div><!-- .header_wrap -->
	</header><!-- #masthead --><?php

	do_action( 'after_header' );

	?><div id="content" class="site-content">
		<div class="wrap wrap-content">
			<div class="breadcrumbs">
				<div class="wrap-crumbs"><?php

					do_action( 'function_names_breadcrumbs' );

				?></div><!-- .wrap-crumbs -->
			</div><!-- .breadcrumbs -->