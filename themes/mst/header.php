<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ModernStoreTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mst' ); ?></a>

	<header id="mst-header" class="site-header">
		<div id="nav-toggle">
			<label id="hamburger" for="toggle">&#9776;</label>
		</div>
		<div id="nav-logo">
			<!-- Display logo only if one, else display text from bloginfo -->
			<?php if (!has_custom_logo()) { ?>
				<h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
			<?
			}
			else{ 
				the_custom_logo();
			} ?>
		</div>
		<div id="mst-navbar">
		<input type="checkbox" id="toggle" unchecked/>
		<div class="mst-menu-container">
		<?php
			// Checks if menu is available
			if (has_nav_menu('menu-1')) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'mst-primary-menu',
						'menu_class' => 'mst-menu'
					)
				);
			}
				
				?>
		</div>
				
		</div>
	</header>