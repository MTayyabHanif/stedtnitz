<?php
/**
 * Stedtnitz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stedtnitz
 */

if ( ! function_exists( 'stedtnitz_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stedtnitz_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Stedtnitz, use a find and replace
	 * to change 'stedtnitz' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'stedtnitz', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Adding theme support for different thumbnail sizes.
	 */

	if ( function_exists( 'add_image_size' ) ) {

			add_image_size( 'background_large', 1920 );
			add_image_size( 'background_small', 1240 );
			add_image_size( 'single', 860 );
			add_image_size( 'opengraph', 680 );
			add_image_size( 'column', 500 );
			add_image_size( 'thumbnail', 200 );
		}

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header-menu' => esc_html__( 'Header Menu', 'stedtnitz' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'stedtnitz_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'stedtnitz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stedtnitz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stedtnitz_content_width', 640 );
}
add_action( 'after_setup_theme', 'stedtnitz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stedtnitz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stedtnitz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stedtnitz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	// FOOTER LEFT WIDGETS
	register_sidebar( array(
		'name'          => 'Footer Area - 1 (LEFT)',
		'id'            => 'footer__left_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 2 (LEFT)',
		'id'            => 'footer__left_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	// FOOTER RIGHT WIDGETS
	register_sidebar( array(
		'name'          => 'Footer Area - 1 (RIGHT)',
		'id'            => 'footer__right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 2 (RIGHT)',
		'id'            => 'footer__right_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 3 (RIGHT)',
		'id'            => 'footer__right_3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 4 (RIGHT)',
		'id'            => 'footer__right_4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 5 (RIGHT)',
		'id'            => 'footer__right_5',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 6 (RIGHT)',
		'id'            => 'footer__right_6',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 6 (RIGHT)',
		'id'            => 'footer__right_6',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 7 (RIGHT)',
		'id'            => 'footer__right_7',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 8 (RIGHT)',
		'id'            => 'footer__right_8',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );


	// FOOTER BOTTOM FULL LINE
	register_sidebar( array(
		'name'          => 'Footer Area - Full (Bottom)',
		'id'            => 'footer__full_bottom',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	// Usage of this widget area.
	// dynamic_sidebar( 'footer_1' );
}
add_action( 'widgets_init', 'stedtnitz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stedtnitz_scripts() {
	wp_enqueue_style( 'stedtnitz-style', get_stylesheet_uri() );
	if (is_single()) {
		wp_enqueue_style( 'font-awesome', "https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css" );
	}

	wp_enqueue_script( 'stedtnitz-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '34255', true );
	
	wp_enqueue_script( 'stedtnitz-pagepilling-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '34255', false );

	wp_enqueue_script( 'stedtnitz-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	/**
	 * Adding script for live reload for styling purposes.
	 *
	 * @todo This script should be removed when shipping out the theme
	 */
	wp_register_script( 'livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true );
	wp_enqueue_script( 'livereload' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stedtnitz_scripts' );

/**
 * Function to remove the emojis support for wordpress backend.
 * @return None returns nothing.
 */
function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

}
add_action( 'init', 'disable_wp_emojicons' );


// Function to  use while retriving thumbnail URL
function image_data( $image_id, $image_thumb_name ) {
	return wp_get_attachment_image_src( $image_id, $image_thumb_name );
}

/**
 * stednitz function to calculate reading time for a post.
 *
 * @param int $post_id Takes the post id as an agument.
 * @return int
 */
function stednitz_calculate_reading_time( $post_id ) {

	$post_content = get_post( $post_id )->post_content;

	$stripped_content = strip_shortcodes( $post_content );

	$stripped_tags_content = strip_tags( $stripped_content );

	$word_count = str_word_count( $stripped_tags_content );

	$reading_time = ceil( $word_count / 200 );

	if ( $reading_time > 1 ) {
		return $reading_time . ' mins read';
	} else {
		return $reading_time . ' min read';
	}
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function stednitz_page_meta_box()
{
        add_meta_box(
            'stednitz_box_id',           // Unique ID
            'Stedtnitz Page Settings',  // Box title
            'stednitz_page_settings_box',  // Content callback, must be of type callable
            'page'                   // Post type
        );
}
add_action('add_meta_boxes', 'stednitz_page_meta_box');

function stednitz_page_settings_box($post)
{
	$values = get_post_meta( $post->ID )['background_images'];
	?>
	<h2>Select the page background styles here</h2>
	<button>Toogle ON/OFF</button>
	<button id="select_images">Select Images</button>
	<input type="hidden" id="save_images" value="<?php echo $values[0]; ?>" name="save_images">
	<ul id="list_images">
	<?php
	if (isset($values) && $values[0] != '') {
		$images = json_decode($values[0]);
		// var_dump($values);
		foreach ($images as $attachment_id) {
		echo '<li><img src="'. wp_get_attachment_image_src($attachment_id)[0] .'" style="width:100px;"/></li>';

		}
	}
	echo "</ul>";
	wp_nonce_field( 'stednitz_page_settings_box_nonce', 'meta_box_nonce' );
}

function stednitz_save_page_settings( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'stednitz_page_settings_box_nonce' ) ) return;
     
    // If current user does not have permission return out.
    if( !current_user_can( 'edit_post' ) ) return;

	if( isset( $_POST['save_images'] ) ){
		update_post_meta( $post_id, 'background_images', esc_attr( $_POST['save_images'] ) );
	}
    
}

add_action( 'save_post', 'stednitz_save_page_settings' );

function stednitz_page_setting_scripts()
{
    // get current admin screen, or null
    $screen = get_current_screen();
    // verify admin screen object
    if (is_object($screen)) {
        // enqueue only for specific post types
        if ($screen->post_type == 'page') {
        	// Load Wordpress internet resources required for media uploader.
        	wp_enqueue_media();
            // enqueue script
            wp_enqueue_script('stednitz_page_setting_script', get_template_directory_uri() . '/assets/js/admin-script.js', array('jquery'));
        }
    }
}
add_action('admin_enqueue_scripts', 'stednitz_page_setting_scripts');


function remove_animation_option($data, $label){
$data = array(
		'type' => 'animation_style',
		'heading' => __( 'CSS Animation', 'js_composer' ),
		'param_name' => 'css_animation',
		'admin_label' => $label['label'],
		'value' => '',
		'settings' => array(
			'type' => 'in',
			'custom' => array(
				array(
					'label' => __( 'Default', 'js_composer' ),
					'values' => array(
						__( 'Top to bottom', 'js_composer' ) => 'top-to-bottom',
						__( 'Bottom to top', 'js_composer' ) => 'bottom-to-top',
						__( 'Left to sdflk right', 'js_composer' ) => 'left-to-right',
						__( 'Right to left', 'js_composer' ) => 'right-to-left',
						__( 'Appear from center', 'js_composer' ) => 'appear',
					),
				),
			),
		),
		'description' => __( 'Select type of animation for element to be animated when it "enters" the browsers viewport (Note: works only in modern browsers).', 'js_composer' ),
		'dependency' => array(
			'element' => $label['element'],
			'value' => $label['value'],
		),

	);
return $data;
}
add_filter( 'vc_map_add_css_animation', 'remove_animation_option', 10, 2);


// Adding new page piling container shortcode in visual composer.
if (function_exists( 'vc_map' ) ) :

$anim_params = array(
	'label' => false,
	'element' => 'page_piling',
	'value'  => 'disable'
	);

	$params = array(
		'name' => __( 'Section', 'js_composer' ),
		'base' => 'vc_section',
		'is_container' => true,
		'icon' => 'vc_icon-vc-section',
		'show_settings_on_create' => false,
		'category' => __( 'Content', 'js_composer' ),
		'as_parent' => array(
			'only' => 'vc_row, pp_page',
		),
		'as_child' => array(
			'only' => '', // Only root
		),
		'class' => 'vc_main-sortable-element',
		'description' => __( 'Group multiple rows in section', 'stedtnitz' ),
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Enable Page Piling Container', 'stedtnitz' ),
				'param_name' => 'page_piling',
				'value' => array(
					__( 'No', 'stedtnitz' ) => 'disable',
					__( 'Yes', 'stedtnitz' ) => 'enable',
				),
				'description' => __( 'If Enabled, this section will be converted to PagePilling section, use rows in it to make slides..', 'stedtnitz' ),
				),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Section stretch', 'js_composer' ),
				'param_name' => 'full_width',
				'value' => array(
					__( 'Default', 'js_composer' ) => '',
					__( 'Stretch section', 'js_composer' ) => 'stretch_row',
					__( 'Stretch section and content', 'js_composer' ) => 'stretch_row_content',
				),
				'description' => __( 'Select stretching options for section and content (Note: stretched may not work properly if parent container has "overflow: hidden" CSS property).', 'js_composer' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Hide header bar?', 'js_composer' ),
				'param_name' => 'pp_show_header',
				'description' => __( 'If checked section will be set to full height.', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'enable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Full height section?', 'js_composer' ),
				'param_name' => 'full_height',
				'description' => __( 'If checked section will be set to full height.', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Content position', 'js_composer' ),
				'param_name' => 'content_placement',
				'value' => array(
					__( 'Default', 'js_composer' ) => '',
					__( 'Top', 'js_composer' ) => 'top',
					__( 'Middle', 'js_composer' ) => 'middle',
					__( 'Bottom', 'js_composer' ) => 'bottom',
				),
				'description' => __( 'Select content position within section.', 'js_composer' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Use video background?', 'js_composer' ),
				'param_name' => 'video_bg',
				'description' => __( 'If checked, video will be used as section background.', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'YouTube link', 'js_composer' ),
				'param_name' => 'video_bg_url',
				'value' => 'https://www.youtube.com/watch?v=lMJXxhRFO1k',
				// default video url
				'description' => __( 'Add YouTube link.', 'js_composer' ),
				'dependency' => array(
					'element' => 'video_bg',
					'not_empty' => true,
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Parallax', 'js_composer' ),
				'param_name' => 'video_bg_parallax',
				'value' => array(
					__( 'None', 'js_composer' ) => '',
					__( 'Simple', 'js_composer' ) => 'content-moving',
					__( 'With fade', 'js_composer' ) => 'content-moving-fade',
				),
				'description' => __( 'Add parallax type background for section.', 'js_composer' ),
				'dependency' => array(
					'element' => 'video_bg',
					'not_empty' => true,
				),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Parallax', 'js_composer' ),
				'param_name' => 'parallax',
				'value' => array(
					__( 'None', 'js_composer' ) => '',
					__( 'Simple', 'js_composer' ) => 'content-moving',
					__( 'With fade', 'js_composer' ) => 'content-moving-fade',
				),
				'description' => __( 'Add parallax type background for section (Note: If no image is specified, parallax will use background image from Design Options).', 'js_composer' ),
				'dependency' => array(
					'element' => 'video_bg',
					'is_empty' => true,
				),
			),
			array(
				'type' => 'attach_image',
				'heading' => __( 'Image', 'js_composer' ),
				'param_name' => 'parallax_image',
				'value' => '',
				'description' => __( 'Select image from media library.', 'js_composer' ),
				'dependency' => array(
					'element' => 'parallax',
					'not_empty' => true,
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Parallax speed', 'js_composer' ),
				'param_name' => 'parallax_speed_video',
				'value' => '1.5',
				'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'js_composer' ),
				'dependency' => array(
					'element' => 'video_bg_parallax',
					'not_empty' => true,
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Parallax speed', 'js_composer' ),
				'param_name' => 'parallax_speed_bg',
				'value' => '1.5',
				'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'js_composer' ),
				'dependency' => array(
					'element' => 'parallax',
					'not_empty' => true,
				),
			),
			vc_map_add_css_animation( $anim_params ),
			array(
				'type' => 'el_id',
				'heading' => __( 'Section ID', 'js_composer' ),
				'param_name' => 'el_id',
				'description' => sprintf( __( 'Enter section ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'js_composer' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'checkbox',
				'heading' => __( 'Disable section', 'js_composer' ),
				'param_name' => 'disable_element',
				// Inner param name.
				'description' => __( 'If checked the section won\'t be visible on the public side of your website. You can switch it back any time.', 'js_composer' ),
				'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
				'dependency' => array(
					'element' => 'page_piling',
					'value' => 'disable',
				),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Extra class name', 'js_composer' ),
				'param_name' => 'el_class',
				'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
			),
			array(
				'type' => 'css_editor',
				'heading' => __( 'CSS box', 'js_composer' ),
				'param_name' => 'css',
				'group' => __( 'Design Options', 'js_composer' ),
			),
		),
		'js_view' => 'VcSectionView',
);
vc_map( $params );

$anim_params = array(
	'label' => false,
	'element' => 'pp_option',
	'value'  => 'default'
	);
$attributes = array(
	'name' => __( 'Row', 'js_composer' ),
	'base' => 'vc_row',
	'is_container' => true,
	'icon' => 'icon-wpb-row',
	'show_settings_on_create' => false,
	'category' => __( 'Content', 'js_composer' ),
	'class' => 'vc_main-sortable-element',
	'description' => __( 'Place content elements inside the row', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Row stretch', 'js_composer' ),
			'param_name' => 'full_width',
			'value' => array(
				__( 'Default', 'js_composer' ) => '',
				__( 'Stretch row', 'js_composer' ) => 'stretch_row',
				__( 'Stretch row and content', 'js_composer' ) => 'stretch_row_content',
				__( 'Stretch row and content (no paddings)', 'js_composer' ) => 'stretch_row_content_no_spaces',
			),
			'description' => __( 'Select stretching options for row and content (Note: stretched may not work properly if parent container has "overflow: hidden" CSS property).', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Columns gap', 'js_composer' ),
			'param_name' => 'gap',
			'value' => array(
				'0px' => '0',
				'1px' => '1',
				'2px' => '2',
				'3px' => '3',
				'4px' => '4',
				'5px' => '5',
				'10px' => '10',
				'15px' => '15',
				'20px' => '20',
				'25px' => '25',
				'30px' => '30',
				'35px' => '35',
			),
			'std' => '0',
			'description' => __( 'Select gap between columns in row.', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Full height row?', 'js_composer' ),
			'param_name' => 'full_height',
			'description' => __( 'If checked row will be set to full height.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Columns position', 'js_composer' ),
			'param_name' => 'columns_placement',
			'value' => array(
				__( 'Middle', 'js_composer' ) => 'middle',
				__( 'Top', 'js_composer' ) => 'top',
				__( 'Bottom', 'js_composer' ) => 'bottom',
				__( 'Stretch', 'js_composer' ) => 'stretch',
			),
			'description' => __( 'Select columns position within row.', 'js_composer' ),
			'dependency' => array(
				'element' => 'full_height',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Equal height', 'js_composer' ),
			'param_name' => 'equal_height',
			'description' => __( 'If checked columns will be set to equal height.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Content position', 'js_composer' ),
			'param_name' => 'content_placement',
			'value' => array(
				__( 'Default', 'js_composer' ) => '',
				__( 'Top', 'js_composer' ) => 'top',
				__( 'Middle', 'js_composer' ) => 'middle',
				__( 'Bottom', 'js_composer' ) => 'bottom',
			),
			'description' => __( 'Select content position within columns.', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Use video background?', 'js_composer' ),
			'param_name' => 'video_bg',
			'description' => __( 'If checked, video will be used as row background.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'YouTube link', 'js_composer' ),
			'param_name' => 'video_bg_url',
			'value' => 'https://www.youtube.com/watch?v=lMJXxhRFO1k',
			// default video url
			'description' => __( 'Add YouTube link.', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Parallax', 'js_composer' ),
			'param_name' => 'video_bg_parallax',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( 'Simple', 'js_composer' ) => 'content-moving',
				__( 'With fade', 'js_composer' ) => 'content-moving-fade',
			),
			'description' => __( 'Add parallax type background for row.', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Parallax', 'js_composer' ),
			'param_name' => 'parallax',
			'value' => array(
				__( 'None', 'js_composer' ) => '',
				__( 'Simple', 'js_composer' ) => 'content-moving',
				__( 'With fade', 'js_composer' ) => 'content-moving-fade',
			),
			'description' => __( 'Add parallax type background for row (Note: If no image is specified, parallax will use background image from Design Options).', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg',
				'is_empty' => true,
			),
		),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Image', 'js_composer' ),
			'param_name' => 'parallax_image',
			'value' => '',
			'description' => __( 'Select image from media library.', 'js_composer' ),
			'dependency' => array(
				'element' => 'parallax',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Parallax speed', 'js_composer' ),
			'param_name' => 'parallax_speed_video',
			'value' => '1.5',
			'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'js_composer' ),
			'dependency' => array(
				'element' => 'video_bg_parallax',
				'not_empty' => true,
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Parallax speed', 'js_composer' ),
			'param_name' => 'parallax_speed_bg',
			'value' => '1.5',
			'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'js_composer' ),
			'dependency' => array(
				'element' => 'parallax',
				'not_empty' => true,
			),
		),
		vc_map_add_css_animation( $anim_params ),
		array(
			'type' => 'el_id',
			'heading' => __( 'Row ID', 'js_composer' ),
			'param_name' => 'el_id',
			'description' => sprintf( __( 'Enter row ID (Note: make sure it is unique and valid according to <a href="%s" target="_blank">w3c specification</a>).', 'js_composer' ), 'http://www.w3schools.com/tags/att_global_id.asp' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Disable row', 'js_composer' ),
			'param_name' => 'disable_element',
			// Inner param name.
			'description' => __( 'If checked the row won\'t be visible on the public side of your website. You can switch it back any time.', 'js_composer' ),
			'value' => array( __( 'Yes', 'js_composer' ) => 'yes' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'default',
			),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'js_composer' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'js_composer' ),
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'js_composer' ),
			'param_name' => 'css',
			'group' => __( 'Design Options', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Select Image', 'js_composer' ),
			'param_name' => 'pp_option',
			'value' => array(
					__( 'Disabled', 'stedtnitz' ) => 'default',
					__( 'Add Image', 'stedtnitz' ) => 'image',
					__( 'Add Video', 'stedtnitz' ) => 'video',
				),
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'description' => __( 'Use "Image" or "Video" to enable PagePilling on this row, this row will act as a slide.', 'js_composer' ),
		),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Select Image', 'js_composer' ),
			'param_name' => 'pp_image',
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'image',
			),
			'description' => __( 'Choose Image that will act slide background in PagePilling.', 'js_composer' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Video URL', 'js_composer' ),
			'param_name' => 'pp_video_url',
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'description' => __( 'Add Embed Video URL to add video as PagePilling slide background. <br>For Example: www.youtube.com/embed/0HItAOYEVYs', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'video',
				),
			),
		array(
			'type' => 'attach_image',
			'heading' => __( 'Select Video Poster', 'js_composer' ),
			'param_name' => 'pp_video_poster',
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => 'video',
			),
			'description' => __( 'This image will be used until the video loads, once buffering completed of video, the video will start playing.', 'js_composer' ),
		),

		array(
			'type' => 'textfield',
			'heading' => __( 'Anchor', 'stedtnitz' ),
			'param_name' => 'pp_anchor',
			'group' => __( 'PagePilling Options', 'js_composer' ),
			'dependency' => array(
				'element' => 'pp_option',
				'value' => array('video', 'image'),
				'not_empty' => true,
			),
			'description' => __( 'Anchor name will be used to refer the slide in URL. For Example: www.example.come/#anchor_name.', 'js_composer' ),
		),
	),
	'js_view' => 'VcRowView',
);

vc_map($attributes);
endif;

/**
 * Retrieve the Most Commented blog posts
 * @param  int $postcount   Number of posts to return
 * @return array            Array of latest posts
 */
function stedtnitz_most_commented_posts($postcount = 3){
	$args = array(
	              'posts_per_page' => $postcount,
	              'post_status' => 'publish',
	              'meta_key' => '_thumbnail_id',
	              'orderby' => 'comment_count',
	              'post_type' => 'post',
	              'order' => 'DESC'
	              );
	$std_mostcommented_posts = query_posts( $args );
	return $std_mostcommented_posts;
}

// unregister all widgets
 function stedtnit_unregister_default_widgets() {
     unregister_widget('WP_Widget_Search');
 }
 add_action('widgets_init', 'stedtnit_unregister_default_widgets', 11);
