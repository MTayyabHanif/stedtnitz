<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stedtnitz
 */
// Use this thing to make them work.
get_header();
$previous_post =  get_previous_post_link('%link');
$next_post = get_next_post_link('%link');
 ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'single' );
		?>

		<?php if ($previous_post && $next_post) { ?>
			<div class="post-nav next-prev pagination">
		<?php 
		}else{ ?>
			<div class="post-nav pagination">
		<?php 
		} ?>
			<?php if ($next_post) { ?>
			<ul class="navigation row pager flat">
			<?php 
			}else{ ?>
			<ul class="navigation row end-xs pager flat">
			<?php 
			} ?>

				<?php if ($next_post) { ?>
					<li class="prev col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<span class="label tag">Prev Post</span>
						<?php echo $next_post; ?>
					</li>
				<?php 
				} ?>

				<?php if ($previous_post) { ?>
					<li class="next col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<span class="label tag">Next Post</span>
						<?php echo $previous_post; ?>
					</li>
				<?php 
				} ?>
			</ul> <!-- end navigation -->
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
