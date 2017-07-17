<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stedtnitz
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-6 col-sm-5 col-md-4 col-lg-4'); ?>>
	<a class="post-link external-link" href="<?php echo esc_url( get_permalink() ) ?>">
		<?php echo get_the_post_thumbnail() ?>
		<div class="post-data">

			<header>
				<?php the_title( '<h1 itemprop="headline" class="post-title">', '</h1>' ); ?>
			</header>

			<div class="post-time">
				<time>
					<?php //stedtnitz_posted_on(); ?>
					3 days ago
					&nbsp; • &nbsp;
					<i>3 min read</i>
				</time>
			</div>

			<div class="hide-mobile excerpt-text" itemprop="text">
				<?php the_excerpt() ?>
			</div>
		</div>
	</a>
</article>