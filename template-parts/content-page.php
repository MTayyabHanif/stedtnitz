<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stedtnitz
 */
if (is_page_template('boxed-page.php')) {
	$isBoxed = "boxed_page";
}else{
	$isBoxed = "full_width_page";
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($isBoxed); ?>>
	<div class="entry-content">
		<?php
		// 	$images = json_decode(get_post_meta( $post->ID, 'background_images')[0]);
		// 	foreach ($images as $image_id) {
		// 		echo wp_get_attachment_image($image_id, 'background_large');
		// 	}
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
