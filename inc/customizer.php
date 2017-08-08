<?php
/**
 * Stedtnitz Theme Customizer
 *
 * @package Stedtnitz
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function stedtnitz_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'stedtnitz_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'stedtnitz_customize_partial_blogdescription',
		) );
		$wp_customize->selective_refresh->add_partial( 'footer_text', array(
			'selector'        => '.site-info',
			'render_callback' => 'stedtnitz_customize_partial_footer_text',
		) );
		$wp_customize->selective_refresh->add_partial( 'stedtnitz_header_bar_color', array(
	        'selector' => '.top-header',
	        'render_callback' => 'stedtnitz_header_bar_color_callback',
    	) );
    	$wp_customize->selective_refresh->add_partial( 'stedtnitz_footer_color', array(
	        'selector' => '.site-footer',
	        'render_callback' => 'stedtnitz_footer_color_callback',
    	) );
    	$wp_customize->selective_refresh->add_partial( 'stedtnitz_menu_icon', array(
	        'selector' => '.menu-container',
	        'render_callback' => function(){?>
	        <div id="menu-icon" class="<?php echo get_theme_mod('stedtnitz_menu_icon', 'light'); ?>">
				<div class="top bar"></div>
				<div class="middle bar"></div>
				<div class="bottom bar"></div>
			</div>
	        <?php
	        },
    	) );
	}
		$wp_customize->add_setting( 'footer_text', array(
		  'type' => 'theme_mod',
		  'capability' => 'edit_theme_options',
		  'default' => 'Powered By Wordpress',
		  'transport' => 'postMessage', // or postMessage
		) );

	$wp_customize->add_control( 'footer_text', array(
	  'type' => 'textarea',
	  'priority' => 10, // Within the section.
	  'section' => 'stedtnitz_footer', // Required, core or custom.
	  'label' => __( 'Footer text' ),
	  'description' => __( 'This text will be displayed at the bottom footer.' ),
	  'input_attrs' => array(
	    'placeholder' => __( 'Add footer text here.' ),
	  ),
	) );

	$wp_customize->add_section( 'stedtnitz_footer', array(
	  'title' => __( 'Footer' ),
	  'panel' => '', // Not typically needed.
	  'priority' => 160,
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	) );

	$wp_customize->add_setting( 'stedtnitz_sidebar_options', array(
	  'type' => 'theme_mod',
	  'capability' => 'edit_theme_options',
	  'default' => 'no_sidebar',
	  'transport' => 'refresh', // or postMessage
	) );

	$wp_customize->add_control( 'stedtnitz_sidebar_options', array(
	  	'type' => 'select',
	  	'choices' => array(
	  	                   'sidebar_1' => __('Blog View - One Post Sidebar', 'stedtnitz'), 
	  	                   'sidebar_2' => __('Blog View - WP Sidebar', 'stedtnitz') ,
	  	                   'no_sidebar' => __('Blog View - No Sidebar','stedtnitz'),
	  	          ),
	  	'priority' => 10, // Within the section.
	  	'section' => 'stedtnitz_sidebar', // Required, core or custom.
	  	'label' => __( 'Select Sidebar' ),
	  	'description' => __( 'Choose the sidebar option for your blog listing page.' ),
	) );

	$wp_customize->add_section( 'stedtnitz_sidebar', array(
	  'title' => __( 'Sidebars', 'stedtnitz' ),
	  'panel' => '', // Not typically needed.
	  'priority' => 160,
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	) );
	$wp_customize->get_section( 'stedtnitz_sidebar' )->active_callback = 'stedtnitz_is_blog';

	$wp_customize->add_setting( 'stedtnitz_header_bar_color', array(
	  'type' => 'theme_mod',
	  'capability' => 'edit_theme_options',
	  'default' => 'light',
	  'transport' => 'postMessage', // or postMessage
	) );
	$wp_customize->add_control('stedtnitz_header_bar_color', array(
		'type' => 'select',
		'choices' => array(
			'light' => __('Light', 'stedtnitz'),
			'dark' 	=> __('Dark', 'stedtnitz'),
			),
		'priority' => 10, // Within the section.
	  	'section' => 'colors', // Required, core or custom.
	  	'label' => __( 'Select Header Bar Color Scheme', 'stedtnitz' ),
	  	'description' => __( 'Chose the header bar color scheme for all webpages.', 'stedtnitz' ),	
	) );

	$wp_customize->add_setting( 'stedtnitz_footer_color', array(
	  'type' => 'theme_mod',
	  'capability' => 'edit_theme_options',
	  'default' => 'light',
	  'transport' => 'postMessage', // or postMessage
	) );
	$wp_customize->add_control('stedtnitz_footer_color', array(
		'type' => 'select',
		'choices' => array(
			'light' => __('Light', 'stedtnitz'),
			'dark' 	=> __('Dark', 'stedtnitz'),
			),
		'priority' => 10, // Within the section.
	  	'section' => 'colors', // Required, core or custom.
	  	'label' => __( 'Select Footer Color Scheme', 'stedtnitz' ),
	  	'description' => __( 'Chose the Footer color scheme for all webpages.', 'stedtnitz' ),	
	) );

	$wp_customize->add_setting( 'stedtnitz_menu_icon', array(
	  'type' => 'theme_mod',
	  'capability' => 'edit_theme_options',
	  'default' => 'light',
	  'transport' => 'postMessage', // or postMessage
	) );
	$wp_customize->add_control('stedtnitz_menu_icon', array(
		'type' => 'select',
		'choices' => array(
			'light' => __('Light', 'stedtnitz'),
			'dark' 	=> __('Dark', 'stedtnitz'),
			),
		'priority' => 10, // Within the section.
	  	'section' => 'colors', // Required, core or custom.
	  	'label' => __( 'Select Header Menu Button Color Scheme', 'stedtnitz' ),
	  	'description' => __( 'Chose the Header Menu Button color scheme for all webpages.', 'stedtnitz' ),	
	) );
}
add_action( 'customize_register', 'stedtnitz_customize_register' );



/**
 * Callback function to see if it is a blog page for viewing options.
 *
 * @return void
 */
function stedtnitz_is_blog() {
	if ( is_front_page() && is_home() ) {
  		return false;
	} elseif ( is_front_page() ) {
	  return false;
	} elseif ( is_home() ) {
	  return true;
	} else {
	  return false;
	}
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function stedtnitz_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function stedtnitz_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render the site footer text for the selective refresh partial.
 *
 * @return void
 */
function stedtnitz_customize_partial_footer_text() {
	echo get_theme_mod('footer_text', 'Powered By Wordpress' );
}

function stedtnitz_header_bar_color_callback(){
	?>
	<div class="header <?php echo get_theme_mod('stedtnitz_header_bar_color', 'light'); ?>">
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
	<?php
}

function stedtnitz_footer_color_callback(){
	?>
	<div class="container-fluid wrap <?php echo get_theme_mod('stedtnitz_header_bar_color', 'light'); ?>">
		<div class="footer-row row with-gutter">


			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
				<div class="sitemap row with-gutter">

					<?php if ( is_active_sidebar( 'footer__right_1' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_1' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_2' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_2' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_3' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_3' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_4' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_4' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_5' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_5' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_6' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_6' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_7' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_7' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_8' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_8' ); ?>
					</div>
					<?php } ?>
				</div>
			</div>


			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 last-xs first-sm first-md first-lg">
				<div class="aboutsite row with-gutter">
					<?php if ( is_active_sidebar( 'footer__left_1' ) ) { ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php dynamic_sidebar( 'footer__left_1' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__left_2' ) ) { ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php dynamic_sidebar( 'footer__left_2' ); ?>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 last-xs last-sm">
					<?php if ( is_active_sidebar( 'footer__full_bottom' ) ) { ?>
					<?php dynamic_sidebar( 'footer__full_bottom' ); ?>
					<?php } ?>

				<div class="site-info">
					 <?php 
						echo get_theme_mod('footer_text', 'Proudly Powered By Inject Themes' );
					  ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</div> <!-- container-fluid -->
	<?php
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function stedtnitz_customize_preview_js() {
	wp_enqueue_script( 'stedtnitz_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'stedtnitz_customize_preview_js' );
