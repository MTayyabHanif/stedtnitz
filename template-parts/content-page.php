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
<script>var row_colors = ["#333", "#333", "#333", "#333"], anchors_name = [];</script>
<article id="post-<?php the_ID(); ?>" <?php post_class($isBoxed); ?>>
	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
