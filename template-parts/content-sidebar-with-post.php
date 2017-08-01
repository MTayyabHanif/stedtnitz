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
				<div class="tab">
					<a href="#recent-news" class="tab__name">Recent News</a>
					<ul class="tab__items" id="recent-news">
						<li class="tab__item">
							<a href="/news/cristiano-ronaldo-thing-pink-7egend-tech-280717" class="tab__item__link">Cristiano Ronaldo acquires digital agency with a view to launching tech brand 7egend</a>
							<span class="posted-on"><time class="entry-date published" datetime="2017-07-21T23:39:25+00:00">1 week</time><time class="updated" datetime="2017-07-22T06:49:59+00:00">July 22, 2017</time> ago</span>
						</li>
						<li class="tab__item">
							<a href="/news/major-lazer-know-no-more-eko-philip-andelman-film-280717" class="tab__item__link">Major Lazer play with dreams and reality in new interactive vide</a>
							<span class="posted-on"><time class="entry-date published" datetime="2017-07-21T23:39:25+00:00">1 week</time><time class="updated" datetime="2017-07-22T06:49:59+00:00">July 22, 2017</time> ago</span>
						</li>
						<li class="tab__item">
							<a href="/news/iron-ring-sculpture-280717" class="tab__item__link">Welsh iron ring sculg dubbed “monument of oppression”</a>
							<span class="posted-on"><time class="entry-date published" datetime="2017-07-21T23:39:25+00:00">1 week</time><time class="updated" datetime="2017-07-22T06:49:59+00:00">July 22, 2017</time> ago</span>
						</li>
						<li class="tab__item">
							<a href="/news/pentagram-ready-player-one-logo-spielberg-graphic-design-280717" class="tab__item__link">Pentagram’s Emily for Spielberg&#x27;s Ready Player One </a>
							<span class="posted-on"><time class="entry-date published" datetime="2017-07-21T23:39:25+00:00">1 week</time><time class="updated" datetime="2017-07-22T06:49:59+00:00">July 22, 2017</time> ago</span>
						</li>
						<li class="tab__item">
							<a href="/news/jean-jullien-otherway-jean-georges-the-connaught-graphic-design-280717" class="tab__item__link">Jean Jullien and Otherway design playful identity for new </a>
							<span class="posted-on"><time class="entry-date published" datetime="2017-07-21T23:39:25+00:00">1 week</time><time class="updated" datetime="2017-07-22T06:49:59+00:00">July 22, 2017</time> ago</span>
						</li>
						<li class="tab__item">
							<a href="/news/the-bomb-film-smriti-keshari-eric-schlosser-kevin-ford-netflix-280717" class="tab__item__link">Netflix to premiere experimental nuclear film Thes</a>
							<span class="posted-on"><time class="entry-date published" datetime="2017-07-21T23:39:25+00:00">1 week</time><time class="updated" datetime="2017-07-22T06:49:59+00:00">July 22, 2017</time> ago</span>
						</li>
					</ul>
				</div>
		
				<?php get_template_part( 'template-parts/content-most-commented-posts'); ?>
			</div>
		</div>
	</aside>
</div>