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
		'gallery',
		'caption',
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
}
add_action( 'widgets_init', 'stedtnitz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stedtnitz_scripts() {
	wp_enqueue_style( 'stedtnitz-style', get_stylesheet_uri() );

	wp_enqueue_script( 'stedtnitz-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20151215', true );
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

	$reading_time = ceil( $word_count / 300 );

	if ( $reading_time > 1 ) {
		return $reading_time . ' mins read';
	} else {
		return $reading_time . ' min read';
	}
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
