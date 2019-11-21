<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<?php wp_head(); ?>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class(); ?>>

<div class="se-pre-con"></div>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-light navbar-expand-lg fixed-top">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
								<div><?php bloginfo( 'name' ); ?></div>
								<div class="navbar-brand-sub"><?php bloginfo( 'description' ); ?></div>
							</a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
