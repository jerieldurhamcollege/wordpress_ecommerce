<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ModernStoreTheme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info"> <?
		$copyString = 'mst_footer_copyright_text';
		if (!empty(get_theme_mod($copyString))) {
				?>
				<p>
				<?
				if (!empty(get_theme_mod($copyString))) {
					echo get_theme_mod($copyString);
				}
				?> </p> <?
			}
			?>
		</div><!-- .site-info -->
		<div id="footer-links">
			<?php mst_social_media_menu() ?>
			<!-- <a href="https://fb.com"><i class="fa-brands fa-facebook-square"></i></a>
			<a href="https://twitter.com"><i class="fa-brands fa-twitter-square"></i></a>
			<a href="https://github.com/jerieldurhamcollege/"><i class="fa-brands fa-github-square"></i></a>
			<a href="https://www.linkedin.com/in/jerielbenavides/"><i class="fa-brands fa-linkedin"></i></a> -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
