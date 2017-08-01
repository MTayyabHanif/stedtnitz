<?php
/**
 * Template part for displaying posts with WP sidebar
 *
 * @package Stedtnitz
 */
$image_data_small = image_data( get_post_thumbnail_id(), 'column' );
$featuredImageURL = $image_data_small[0];
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-12 col-md-6 col-lg-6'); ?>>
	<a class="post-link external-link" href="<?php echo esc_url( get_permalink() ) ?>">

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

			<header>
				<?php the_title( '<h1 itemprop="headline" class="post-title">', '</h1>' ); ?>
			</header>

			<div class="post-time">
				<time>
					<?php stedtnitz_posted_on(); ?>
					&nbsp; • &nbsp;
					<i><?php echo stednitz_calculate_reading_time($post->ID); ?></i>
				</time>
			</div>

			<div class="excerpt-text" itemprop="text"> 
				<?php the_excerpt(); ?>
			</div>
		</div>
	</a>
</article>
