<?php
/**
 * Template Name: Boxed Page
 *
 * @package Stedtnitz
 * @subpackage Stednitz Theme
 * @since Stednitz Theme 1.0
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post(); 
			$image_data_large = image_data( get_post_thumbnail_id(), 'background_small' );
			$featuredImageURL_single = $image_data_large[0];
			?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('single-post boxed_page'); ?>>
					<header>
						<?php the_title( '<h1 itemprop="headline" class="post-title">', '</h1>' ); ?>
					</header>

					<?php if (has_post_thumbnail()) { ?>
						<div class="post-image">
							<?php
								$img_html = '<img src="' . $featuredImageURL_single . '" alt="' . get_the_title(). '">';
								$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
								echo $img_html;
							?>
						</div>
					<?php } ?>
					<div class="entry-content post-data">
						<?php
							the_content();
						?>
					</div><!-- .entry-content -->

				</article><!-- #post-<?php the_ID(); ?> -->
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
get_footer(); ?>