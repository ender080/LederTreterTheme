<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearosa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="google-site-verification" content="-uINR5_r8GTRbuaT-D2PF_6Cb8MvTfG5jMYxzlY6Rw4" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


	<header id="masthead" class="site-header mt-0 shadow-sm navbar-light bg-light">
		<div class="container-fluid mx-auto m-0 p-0"><?php dynamic_sidebar( 'topbar' ); ?></div>
		<div id="dropdownsearch" class="collapse container mx-auto m-1 px-5 text-center"><?php get_search_form(); ?></div>

			<div class="container w-50 mx-auto text-center my-5 d-none d-lg-block"><?php get_template_part( 'template-particles/brandandlogo' ); ?></div> <!-- Logo on Desktop-->

			<nav class="navbar container navbar-expand-lg sticky-top" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>

							<div class="d-lg-none"><?php get_template_part( 'template-particles/brandandlogo' ); ?></div> <!-- Logo in mobile menu-->
									<a href="/warenkorb/" class="nav-link d-lg-none"><i class="mysearchtoggle fa fa-shopping-cart" aria-hidden="true"></i></a><!-- CART on mobile menu-->
									<a href="#" class="nav-link d-lg-none" data-toggle="collapse" data-target="#dropdownsearch"><i class="mysearchtoggle fa fa-search" aria-hidden="true"></i></a><!-- Search on mobile menu-->

									<div class="d-none d-xl-block"><?php get_template_part( 'template-particles/socialmenu' ); ?></div><!-- socialmenu on Desktop-->

									<?php wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'container_class' => 'collapse navbar-collapse',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'navbar-nav mx-auto',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'depth'           => 2,
											'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
										)
									); ?>

									<a href="/warenkorb/" class="nav-link d-none d-lg-block"><i class="mysearchtoggle fa fa-shopping-cart" aria-hidden="true"></i></a><!-- CART on mobile menu-->
									<a href="#" class="nav-link d-none d-lg-block" data-toggle="collapse" data-target="#dropdownsearch"><i class="mysearchtoggle fa fa-search" aria-hidden="true"></i> </a><!-- Search on Desktop menu-->


				</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
