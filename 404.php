<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Stedtnitz
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'stedtnitz' ); ?></h1>
			</header><!-- .page-header -->
			<p class="info-text"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below, because we don\'t you to be lost here ;)', 'stedtnitz' ); ?></p>

		</section><!-- .error-404 -->
		<div class="page-content">

			<div class="sidebar-side">
				<aside class="widget-area row with-gutter">
					
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<?php
						the_widget( 'WP_Widget_Recent_Posts' );
						?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'stedtnitz' ); ?></h2>
							<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 0,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
							</ul>
						</div><!-- .widget -->
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

						<?php
						the_widget( 'WP_Widget_Tag_Cloud' );
						?>
					</div>
				</aside>
			</div>

		</div><!-- .page-content -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
