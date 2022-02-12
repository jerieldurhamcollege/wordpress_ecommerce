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

	<!-- <header id="mst_navbar" class="site-header">
		<div class="site-branding">
		<nav>
			<div class="top-bar" id="nav-menu">
				<div class="top-bar-left">
					<ul class="dropdown menu" data-dropdown-menu>
					<li class="menu-text"><?php bloginfo( 'name' ); ?></li>
					</ul>
				</div>
				<div class="top-bar-right">
					<ul class="menu">
						<li class=""><a href="#about">about</a></li>
						<li class=""><a href="#projects">projects</a></li>
						<li class=""><a href="#contact">contact</a></li>
					</ul>

					<button class="navbar-btn"></button>
				</div>
			</div>
		</nav>
		</div>
	</header> -->
	<header>

    <div class="logo">
        <img class="img-responsive" src="images/logo.png" alt="Dogs Wiki Logo" style="margin-left: 20px">
    </div>

    <nav>
        <label id="hamburger" for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle" unchecked/>
        <!-- <div class="menu">
            <a href="#about">About</a>
            <a href="#breeds">Breeds</a>
            <a href="#history">History</a>
            <a href="#gallery">Gallery</a> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
        <!-- </div> -->
    </nav>

</header>




		
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mst' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
