<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stedtnitz
 */

get_header(); ?>

		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :
		$counter = 0;

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$sidebar = get_theme_mod('stedtnitz_sidebar_options');
			?>
			<div class="postlist wp-sidebar row center-xs center-md center-sm center-lg">
				<div class="blog-header col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1 class="page-title">Our Blog</h1>
				</div>
				<?php if ($sidebar == 'sidebar_2') { ?>
					<div class="posts-side col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="row">
				<?php } ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				$counter++;
				if ($sidebar == 'sidebar_1' && $counter  == 1 && $paged == 1 && is_home()) { // sidebar with one big post
					get_template_part( 'template-parts/content-sidebar-with-post');
				}elseif ($sidebar == 'sidebar_2') { // wp typical sidebar 
					get_template_part( 'template-parts/content-sidebar-wp');
				}else{ // no sidebar
					get_template_part( 'template-parts/content', get_post_format() );
				}
			endwhile;
			?>
				<?php if ($sidebar == 'sidebar_2') { ?>
					</div><!-- row -->
					</div><!-- #posts-side -->
					<div class="sidebar-side col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<?php get_sidebar();  ?>
					</div><!-- #sidebar-side -->
				<?php } ?>
			</div><!-- #row -->

			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->

<?php
get_footer();
