<?php
/**
 * Header Part for the main header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearosa - melaniemueller.design
 */

?>
<header id="masthead" class="site-header">
		<div class="container-fluid mx-auto m-0 p-0"><?php dynamic_sidebar( 'topbar' ); ?></div>
		<div id="dropdownsearch" class="collapse container mx-auto m-1 px-5 text-center"><?php get_search_form(); ?></div>


			<nav class="navbar navbar-expand-xxl" role="navigation">
						
						

						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>

							<?php if ( is_front_page() && is_home() ) : ?>

								<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

							<?php else : ?>

								<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

							<?php endif; ?>


						<?php } else { ?>
							 <a class="navbar-brand m-0" <?php the_custom_logo(); ?></a>
						<?php } ?><!-- end custom logo -->

										<?php get_template_part( 'custom/php/templates/toggler/toggler_main_1' ); ?>

										<?php get_template_part( 'custom/php/menu/menu-primary', 'none' ); ?>


				</nav>

	</header><!-- #masthead -->