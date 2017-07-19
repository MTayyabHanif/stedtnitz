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


<?php
if (is_page()) { ?>
	<div id="content" class="site-content">
<?php

 }else{ 

	?>

	<div id="menu-icon">
		<div class="top bar"></div>
		<div class="middle bar"></div>
		<div class="bottom bar"></div>
	</div>
	<ul id="accordion" class="accordion">
		<?php
		wp_nav_menu(
			array(
				'menu' => 'Header Menu',
				'menu_class' => 'main_class',
				'menu_id' => 'main_id',
				'container' => '',
				'depth' => 0,
				'theme_location' => 'menu-1',
			)
		);
		                   ?>
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
	</ul>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stedtnitz' ); ?></a>
	<div id="content" class="site-content">
<?php
}
?>