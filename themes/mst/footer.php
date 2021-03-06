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
	<!-- Section for custom auction post type. -->
	<section>
		<div class="featured_auctions">
			<h2>Upcoming Auctions</h2>
		</div>
		<div class="featured_auctions">
		<?php
			// Query gets most recent posts, as long as the id of the current post is not that one.
			$auction_args = array(
				'post_type' => array('auction'),
				'post_status' => 'publish',
				'post_per_page' => 3,
				'post__not_in'   => array(get_the_ID())
			);
			$auction_query = new WP_Query( $auction_args);
			//Checks if posts are availanle.
			if ( $auction_query->have_posts() ) {
				//Checks all posts, if any.
				while ( $auction_query-> have_posts() ) {
					$auction_query->the_post();
					?>
					<a class="footer_auction_link" href="<?php the_permalink(); ?>">
						<article class='featured_auction'>
							<!-- Print the title and post excerpt. Do not require echo -->
							<? the_post_thumbnail(); ?>
							<h2><? the_title(); ?></h2>
							<p><? the_excerpt(); ?></p>
						</article>
					</a> 
					<?
				}
			}
		?>
		</div>
	</section>
	<footer id="colophon" class="site-footer">
		<div class="site-info"> <?
		$copyString = 'mst_footer_copyright_text';
		//Check for copyright data from customizer.
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
