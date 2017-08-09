<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stedtnitz
 */

?>
</div><!-- #content -->
	<footer id="colophon" class="site-footer">
	<div class="container-fluid wrap <?php echo get_theme_mod('stedtnitz_header_bar_color'); ?>">
		<div class="footer-row row with-gutter">


			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
				<div class="sitemap row with-gutter">

					<?php if ( is_active_sidebar( 'footer__right_1' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_1' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_2' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_2' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_3' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_3' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_4' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_4' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_5' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_5' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_6' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_6' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_7' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_7' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__right_8' ) ) { ?>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<?php dynamic_sidebar( 'footer__right_8' ); ?>
					</div>
					<?php } ?>
				</div>
			</div>


			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 last-xs first-sm first-md first-lg">
				<div class="aboutsite row with-gutter">
					<?php if ( is_active_sidebar( 'footer__left_1' ) ) { ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php dynamic_sidebar( 'footer__left_1' ); ?>
					</div>
					<?php } ?>

					<?php if ( is_active_sidebar( 'footer__left_2' ) ) { ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php dynamic_sidebar( 'footer__left_2' ); ?>
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 last-xs last-sm">
					<?php if ( is_active_sidebar( 'footer__full_bottom' ) ) { ?>
					<?php dynamic_sidebar( 'footer__full_bottom' ); ?>
					<?php } ?>
				
				<div class="site-info">
					 <?php 
						echo get_theme_mod('footer_text' );
					  ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</div> <!-- container-fluid -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
