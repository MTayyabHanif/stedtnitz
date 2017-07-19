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
<?php
if (is_page()) {
?>
	
	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


<?php
}else{
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				echo get_theme_mod('footer_text', 'Powered By Wordpress' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


<?php
}
?>
