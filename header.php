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

	</header>
	<div id="menu-icon">
		<div class="top bar"></div>
		<div class="middle bar"></div>
		<div class="bottom bar"></div>
	</div>
	<div id="header_nav_menu">
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
