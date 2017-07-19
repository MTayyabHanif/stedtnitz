<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stedtnitz
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );
		?>
		<div class="post-nav row">
			<div class="navigation">
			<div class="alignleft">
			<?php 
			// Use this thing to make them work.
			$prevURL = get_permalink(get_previous_post(true)->ID);
			$nextURL = get_permalink(get_next_post(true)->ID);
			?>
			</div>
			<div class="alignright">
			<?php next_post_link(); ?>
			</div>
			</div> <!-- end navigation -->
		</div>
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
