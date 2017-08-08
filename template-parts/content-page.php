<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Stedtnitz
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('full_width_page'); ?>>
	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
