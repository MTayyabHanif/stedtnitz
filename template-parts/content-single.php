<?php
/**
 * Template part for displaying single PAGE
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stedtnitz
 */
$image_data_large = image_data( get_post_thumbnail_id(), 'background_small' );
$featuredImageURL_single = $image_data_large[0];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
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

	<div class="post-data">

		<div class="excerpt-text" itemprop="text"> 
			<?php the_content(); ?>
		</div>
		<footer>
			<div class="share-post">
				<ul class="sharebuttons">
					<li>Share this post:</li>
					<li><a href="http://twitter.com/share?text=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&amp;url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" class="socialdark twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="socialdark facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;"  class="socialdark google"><i class="fa fa-google-plus"></i></a></li>
					<li>
						<a href="<?php the_permalink(); ?>feed" class="socialdark rss"><i class="fa fa-rss"></i></a>
					</li>
					<li><a href="mailto:?Subject=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&amp;Body=<?php the_permalink(); ?>" class="socialdark email"><i class="fa fa-envelope"></i></a></li>
				</ul>
			</div>

			<div class="post-author row">
				<h3 class="col-xs-12 col-md-12 col-sm-12 col-lg-12">About Author</h3>
				<div class="author-image col-xs-12 col-sm-2 col-md-2 col-lg-2"><?php echo get_avatar(get_the_author_meta( 'ID' ), 120) ?></div>
				<div class="autor-meta col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<div class="about-author">
						<h1 class="name"><?php the_author_meta( 'display_name'); ?></h1>
						<p class="email"><?php $user_email = get_the_author_meta( 'user_email' ); echo $user_email;?></p>
					</div>
					<div class="author-description"><?php echo wpautop( get_the_author_meta( 'description' ) ); ?></div>
				</div>
			</div>
			<div class="post-category">Categories: 
				    <?php echo the_category(); ?>
			</div>
			<div class="post-tags">Tags: 
				<?php
				$posttags = get_the_tags();
				if ($posttags) {
					echo '<ul>';
					foreach($posttags as $tag) {
						echo '<li class="tag-item">' . $tag->name . '</li>';
					}
					echo '</ul>';
				}
				?>
			</div>

		</footer>
	</div>
</article>
