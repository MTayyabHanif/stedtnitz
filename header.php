<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Stedtnitz
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip header and navigation, jump to content', 'stedtnitz' ); ?></a>
<header class="top-header">
	<?php 
	if (has_custom_logo()) {
		the_custom_logo();
	}else{
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<h5 class="site-title"><?php bloginfo( 'name' ); ?></h5>
		</a>
		<?php 
	}
	?>
<?php
if (is_page()) { ?>
</header>
	<div id="content" class="site-content">
<?php

 }else{ 

	?>
	<div id="search-icon" class="showsearch"><i class="icono-search"></i></div>
	</header>
	<section class="searchoverlay">
		<i class="icon closesearch"></i>
		<div class="searchbar">
		<?php echo do_shortcode('[wpdreams_ajaxsearchpro id=1]'); ?>
		</div>
		<div class="result-section">
		<?php echo do_shortcode('[wpdreams_ajaxsearchpro_results id=1 element="div"]'); ?>
		</div>
	</section>

	<div id="menu-icon" class="light-menu">
		<div class="top bar"></div>
		<div class="middle bar"></div>
		<div class="bottom bar"></div>
	</div>
	<div id="header_nav_menu" class="light-menu">
		<?php
		wp_nav_menu(
			array(
				'menu' => 'Header Menu',
				'menu_class' => 'accordion',
				'menu_id' => 'accordion',
				'container' => '',
				'depth' => 2,
				'theme_location' => 'header-menu',
			)
		);
	}
		?>
		</div>
<div id="page" class="site">
