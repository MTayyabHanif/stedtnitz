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
	}

	$wp_customize->add_setting( 'footer_text', array(
	  'type' => 'theme_mod',
	  'capability' => 'edit_theme_options',
	  'default' => 'Proudly powered by WordPress | Theme: stedtnitz by Inject.',
	  'transport' => 'postMessage', // or postMessage
	) );

	$wp_customize->add_control( 'footer_text', array(
	  'type' => 'textarea',
	  'priority' => 10, // Within the section.
	  'section' => 'stedtnitz_footer', // Required, core or custom.
	  'label' => __( 'Footer text' ),
	  'description' => __( 'This text will be displayed at the bottom of each page.' ),
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

}
add_action( 'customize_register', 'stedtnitz_customize_register' );

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
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function stedtnitz_customize_partial_footer_text() {
	echo get_theme_mod('footer_text', 'Powered By Wordpress' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function stedtnitz_customize_preview_js() {
	wp_enqueue_script( 'stedtnitz_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'stedtnitz_customize_preview_js' );
