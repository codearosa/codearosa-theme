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
	<script src="https://kit.fontawesome.com/bf9aefa14e.js" crossorigin="anonymous"></script>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<?php get_template_part( 'custom/php/template-parts/preloader'); ?>

<body <?php body_class(); ?>>

<div id="page" class="site">


	<header id="masthead" class="site-header">
		<div class="container-fluid mx-auto m-0 p-0"><?php dynamic_sidebar( 'topbar' ); ?></div>
		<div id="dropdownsearch" class="collapse container mx-auto m-1 px-5 text-center"><?php get_search_form(); ?></div>


			<nav class="navbar navbar-expand-lg" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<div class="hamburger">
    							<div class="line"></div>
    							<div class="line"></div>
    							<div class="line"></div>
						</div>
						</button>
						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>

							<?php if ( is_front_page() && is_home() ) : ?>

								<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

							<?php else : ?>

								<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

							<?php endif; ?>


						<?php } else { ?>
							 <a class="navbar-brand m-0" <?php the_custom_logo(); ?></a>
							 <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
							 
						<?php } ?><!-- end custom logo -->

									<a href="#" class="nav-link d-lg-none" data-toggle="collapse" data-target="#dropdownsearch"><i class="mysearchtoggle text-primary fa fa-search" aria-hidden="true"></i> </a>

									
										<?php get_template_part( 'custom/php/menu/menu-primary', 'none' ); ?>


									<a href="#" class="nav-link d-none d-lg-block" data-toggle="collapse" data-target="#dropdownsearch"><i class="mysearchtoggle text-primary fa fa-search" aria-hidden="true"></i> </a>


				</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
