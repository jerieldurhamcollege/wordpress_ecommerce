<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ModernStoreTheme
 */
get_header();

?> 
	<main id="recent-posts" class="site-main">
		<h1>Popular Posts</h1> <?
		get_template_part( 'template-parts/recent-posts' ); 
		?>
	</main>
	<? 		get_footer(); ?>
<?