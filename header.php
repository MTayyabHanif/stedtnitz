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
	<body <?php body_class('page_pilling_vc'); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip header and navigation, jump to content', 'stedtnitz' ); ?></a>
	<?php $header_class = get_theme_mod('stedtnitz_header_bar_color', 'light' ); ?>
<header class="top-header">
	<div class="header <?php echo $header_class; ?>">
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
	</div>
</header>
	<div id="content" class="site-content">
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
<?php 
$menu_light = false;
if ($menu_light) {
 	$menu_color = 'light-menu';
 }else{$menu_color = '';} ?>
 	<div class="menu-container <?php echo get_theme_mod('stedtnitz_menu_icon', 'light'); ?>">
		<div id="menu-icon" class="". $menu_color ."">
			<div class="top bar"></div>
			<div class="middle bar"></div>
			<div class="bottom bar"></div>
		</div>
	</div>
	<div id="header_nav_menu" class="". $menu_color ."">
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
		?>
	</div>
	<div id="page" class="site">
