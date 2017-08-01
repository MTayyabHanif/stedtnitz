<?php
	/**
	 * MOST COMMENTED POSTS
	 */
?>
<?php

	if (have_posts(stedtnitz_most_commented_posts(6))) :?>
		<div class="tab">
			<a href="#most-popular" class="tab__name">Most Popular</a>
			<ul class="tab__items" id="most-popular">
		<?php
		while (have_posts()) : the_post();
		?>
			<li class="tab__item">
				<a href="<?php echo esc_url( get_permalink() ) ?>" class="tab__item__link"><?php the_title(); ?> </a>
				<?php stedtnitz_posted_on(); ?>
			</li>
		<?php
		endwhile;
		wp_reset_query();
		wp_reset_postdata(); ?>

			</ul>
		</div>
	<?php
	endif;
?>