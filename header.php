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
<?php if (is_page()) {
	$page_meta = (isset(get_post_meta($post->ID, 'stedtnitz_options')[0])) ? get_post_meta($post->ID, 'stedtnitz_options')[0] : False;
	if ($page_meta){
		$header_menu 		=  $page_meta['header_menu'];
		$back_button_link 	= $page_meta['back_button_link'];
		$menu_option 		= $page_meta['menu_option'];
	}else{
		$header_menu 		= '';
		$back_button_link 	= '';
		$menu_option 		= '';
	}
	if ($menu_option == "on") {
		$menu_option = 'light';
	}else{
		$menu_option = 'dark';
	}
	if ($header_menu == "on") {
		$header_mode_on = true;
		$transparent = 'transparent_header';
	}else{
		$header_mode_on = false;
		$transparent = '';
	}
	if (!$back_button_link == "") {
		$backbutton = '<a class="page back-button" href="'.$back_button_link.'">Back</a>';
	}else{
		$backbutton = '';
	}
}else{$transparent = ''; $backbutton = '';$header_mode_on = false;} ?>
	<body <?php body_class('page_pilling_vc '.$transparent.' '); ?>>
	<?php $preloader_style = get_theme_mod('stedtnitz_preloader_chooser', 'p3' ); ?>
	<?php 
		if ($preloader_style == 'p1') {
	 ?>
	 <div id="preloader" class="p1">
	 	<div class="bounce"></div>
	 </div>
	<?php 
		} elseif ($preloader_style == 'p2') {
	 ?>
	 <div id="preloader" class="p2">
	 	<span class="ball"></span>
	 	<span class="shadow"></span>
	 </div>
	<?php 
		} elseif ($preloader_style == 'p3') {
	 ?>
	 <div id="preloader" class="p3">
	 	<span class="spin-logo"></span>
	 	<span class="spin-text"></span>
	 </div>
	<?php 
		}
	 ?>

	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip header and navigation, jump to content', 'stedtnitz' ); ?></a>
	<?php $header_class = get_theme_mod('stedtnitz_header_bar_color', 'light' ); ?>
	<div class="header">
		<header class="top-header <?php echo $header_class; ?>">
			<?php 
			if (has_custom_logo()) {
				the_custom_logo();
				echo $backbutton;
			}else{
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<h5 class="site-title"><?php bloginfo( 'name' ); ?></h5>
				</a>
				<?php 
			}
			?>
		</header>
	</div>
	<div id="content" class="site-content">


	<?php 
if (is_page() && !$header_mode_on) { ?>
	<div id="search-icon" class="showsearch <?php echo $header_class; ?>"><i class="icono-search"></i></div>
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
	}elseif (is_home()) { ?>
			<div id="search-icon" class="showsearch <?php echo $header_class; ?>"><i class="icono-search"></i></div>
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
	}
	 ?>






 	<div class="menu-container">
		<div id="menu-icon" class="<?php echo $menu_option; ?>">
			<div class="top bar"></div>
			<div class="middle bar"></div>
			<div class="bottom bar"></div>
		</div>
	</div>
	<div id="menu-overlay"></div>
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
		?>
	</div>
	</div>
	<div id="page" class="site">
