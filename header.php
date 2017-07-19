<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
<header>
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
	</header>
	<!-- <ul id="accordion" class="accordion">
		<li class="default open">
			<div class="link home"><i class="fa fa-paint-brush"></i>Home<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu" >
				<li data-menuanchor="culture" class="active"><a href="#culture">Culture</a></li>
				<li data-menuanchor="vishen" class=""><a href="#vishen">Vishen</a></li>
				<li data-menuanchor="book" class=""><a href="#book">The Book</a></li>
				<li data-menuanchor="team" class=""><a href="#team">The Team</a></li>
			</ul>
		</li>
		<li class="">
			<div class="link"><i class="fa fa-code"></i>Businesses<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu" >
				<li><a href="businesses.html#mva">Mindvalley Academy</a></li>
				<li><a href="businesses.html#apps">Apps &amp; Platforms</a></li>
				<li><a href="businesses.html#events">Events</a></li>
				<li><a href="businesses.html#international">International</a></li>
				<li><a href="http://evercoach.com" target="_blank">Evercoach</a></li>
			</ul>
		</li>
		<li class=""><div class="link"><i class="fa fa-globe"></i>News<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="http://www.mindvalley.com/blog/" target="_blank">Blog</a></li>
			</ul>
		</li>
		<li class=""><div class="link"><i class="fa fa-globe"></i>Careers<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="http://careers.mindvalley.com/">Opportunities</a></li>
			</ul>
		</li>
		<li class=""><div class="link"><i class="fa fa-globe"></i>Contact<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="contact.html#cs">Customer Support</a></li>
				<li><a href="contact.html#aff">Affiliate Partnerships</a></li>
			</ul>
		</li>
	</ul> -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stedtnitz' ); ?></a>