<?php
/**
 * Template part for displaying one post with sidebar
 *
 * @package Stedtnitz
 */
$image_data_small = image_data( get_post_thumbnail_id(), 'single' );
$featuredImageURL = $image_data_small[0];
?>
<div class="post-with-sidebar row">
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-sidebar col-xs-12 col-sm-6 col-md-8 col-lg-8'); ?>>
		<div class="post-wrapper">

		<?php if (has_post_thumbnail()) { ?>
			<div class="post-image">
				
				<?php
					$img_html = '<img src="' . $featuredImageURL . '" alt="' . get_the_title(). '">';
					$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
					echo $img_html;
				?>
			</div>
		<?php } ?>

			<div class="post-data">
				<div class="post-cat"><?php echo the_category('\\'); ?></div>
				<header>
					<a href="<?php echo esc_url( get_permalink() ) ?>" class="post-permalink">
						<?php the_title( '<h1 itemprop="headline" class="post-title">', '</h1>' ); ?>
					</a>
				</header>

				
				<div class="excerpt-text" itemprop="text"> 
					<?php the_excerpt(); ?>
				</div>
				<div class="post-time">
					<time>
					<span class="post-author"><?php the_author_meta( 'display_name'); ?></span>—
						<?php stedtnitz_posted_on(); ?>
					</time>
				</div>
			</div>
		</div>
	</article>
	<aside class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

		<div class="wrapper--right wrapper--narrow" id="right-container">
			<div class="tabs-slice container time-ago">
				<?php get_template_part( 'template-parts/content-most-posts-desc'); ?>
				
				<?php get_template_part( 'template-parts/content-most-commented-posts'); ?>
			</div>
		</div>
	</aside>
</div>