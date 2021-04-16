<?php
/**
 * Header Part for the main header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearosa - melaniemueller.design
 */

?>
<header id="masthead" class="site-header sticky-top mmu-header-main-4">
		<div class="container-fluid mx-auto m-0 p-0"><?php dynamic_sidebar( 'topbar' ); ?></div>

			<nav class="navbar navbar-expand-xxl" role="navigation">

						<?php get_template_part( 'custom/php/templates/brand/logo/brand_and_logo_main_1' ); ?>

						<?php get_template_part( 'custom/php/templates/toggler/toggler_main_1' ); ?>
						
						<div id="navbarNavDropdown" class="navbar-collapse collapse" style="">

							<div class="row">
								<div class="col-sm-12 col-md-6 d-none d-md-block">

									<?php echo do_shortcode("[add-cr-contact]"); ?>

								</div>

								<div class="col-sm-12 col-md-6">

									<?php get_template_part( 'custom/php/templates/navbar/navbar_1', 'none' ); ?>

								</div>
								
							</div>
						
						</div>	
					

				</nav>

	</header><!-- #masthead -->