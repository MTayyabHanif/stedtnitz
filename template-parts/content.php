<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stedtnitz
 */
$image_data_small = image_data( get_post_thumbnail_id(), 'column' );
$featuredImageURL = $image_data_small[0];

$image_data_large = image_data( get_post_thumbnail_id(), 'background_small' );
$featuredImageURL_single = $image_data_large[0];
?>

<?php
if (!is_single()) { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-6 col-md-4 col-lg-4'); ?>>
	<a class="post-link external-link" href="<?php echo esc_url( get_permalink() ) ?>">

	<?php if (has_post_thumbnail()) { ?>
		<div class="post-image">
			<img src="<?php echo $featuredImageURL; ?>" alt="<?php the_title(); ?>">
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

<?php
}else{ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
	<header>
		<?php the_title( '<h1 itemprop="headline" class="post-title">', '</h1>' ); ?>
	</header>

	<?php if (has_post_thumbnail()) { ?>
		<div class="post-image">
			<img src="<?php echo $featuredImageURL_single; ?>" alt="<?php the_title(); ?>">
		</div>
	<?php } ?>

	<div class="post-data">

		<div class="excerpt-text" itemprop="text"> 
			<?php the_content(); ?>
		</div>
		<footer>
			<div class="post-category">
				<?php wp_list_categories( array(
				        'orderby'    => 'name',
				        'separator'    => ','
				    ) ); ?> 
			</div>
			<div class="post-tags">tags: <?php 
$tags = get_tags(array(
  'hide_empty' => false
));
echo '<ul>';
foreach ($tags as $tag) {
  echo '<li class="tag-item">' . $tag->name . '</li>';
}
echo '</ul>';
			?></div>
		</footer>
	</div>
</article>

<?php
} ?>


