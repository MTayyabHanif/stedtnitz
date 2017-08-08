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
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 2 (LEFT)',
		'id'            => 'footer__left_2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// FOOTER RIGHT WIDGETS
	register_sidebar( array(
		'name'          => 'Footer Area - 1 (RIGHT)',
		'id'            => 'footer__right_1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 2 (RIGHT)',
		'id'            => 'footer__right_2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 3 (RIGHT)',
		'id'            => 'footer__right_3',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 4 (RIGHT)',
		'id'            => 'footer__right_4',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 5 (RIGHT)',
		'id'            => 'footer__right_5',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 6 (RIGHT)',
		'id'            => 'footer__right_6',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 6 (RIGHT)',
		'id'            => 'footer__right_6',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 7 (RIGHT)',
		'id'            => 'footer__right_7',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area - 8 (RIGHT)',
		'id'            => 'footer__right_8',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	// FOOTER BOTTOM FULL LINE
	register_sidebar( array(
		'name'          => 'Footer Area - Full (Bottom)',
		'id'            => 'footer__full_bottom',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
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

/**
 * Load Visual Composer file, modifed by theme.
 */
require get_template_directory() . '/inc/vc-extended.php';

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
	$data = isset(get_post_meta( $post->ID , 'page_options')[0]) ? get_post_meta( $post->ID , 'page_options')[0] : False;
	
	$header_option 		= '';
	$back_button_link 	= '';

	if ($data && $data != '') {
		$header_option 		= 	$data['header_menu'];
		$back_button_link 	=	$data['back_button_link'];
	}

	?>
	<div><p>Remove Header for this page ? <input type="checkbox" name="header_menu" <?php echo ($header_option)?" checked=''":'' ?>></p></div>
	<hr>
	<div id="back_input">
	<p>Type Back Button link here: 
		<input type="text" value="<?php echo $back_button_link; ?>" name="back_button_link">
		<span class="desc">(back button will not show up if input field left empty!)</span>
	</p>
	</div>
	<style>
		span.desc{
			display: block;
			color: #bbbbbb;
			font-size: 12px;
		}
	</style>
	<?php
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

		$header_option 		= 	(isset($_POST['header_menu'])) ? $_POST['header_menu'] : False;
		$back_button_link 	=	(isset($_POST['back_button_link'])) ? esc_attr($_POST['back_button_link']) :  '';
		$page_option_data = array(
			'header_menu'		=> $header_option,
			'back_button_link' 	=> $back_button_link,
		);
		update_post_meta( $post_id, 'page_options', $page_option_data);
    
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

/**
 * Retrieve the Most Commented blog posts
 * @param  int $postcount   Number of posts to return
 * @return array            Array of latest posts
 */
function stedtnitz_posts_desc($postcount = 3){
	$args = array(
	              'posts_per_page' => $postcount,
	              'post_status' => 'publish',
	              'meta_key' => '_thumbnail_id',
	              'post_type' => 'post',
	              'order' => 'ASC'
	              );
	$std_posts_desc_order = query_posts( $args );
	return $std_posts_desc_order;
}

// unregister all widgets
 function stedtnit_unregister_default_widgets() {
     unregister_widget('WP_Widget_Search');
 }
 add_action('widgets_init', 'stedtnit_unregister_default_widgets', 11);


// MOBILE CHECK
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function remove_admin_bar_bump() {
   remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_bar_bump');