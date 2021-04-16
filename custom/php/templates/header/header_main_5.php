<?php
/**
 * Header Part for the main header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearosa - melaniemueller.design
 * 			<div class="mmu-scrollcheck animate__fadeOut"><?php get_template_part( 'custom/php/templates/brand/logo/brand_and_logo_main_2' ); ?></div>

 */

?>
<header id="masthead" class="site-header sticky-top header_main_5 mmu-header-main-5">
		<div class="container-fluid mx-auto m-0 p-0"><?php dynamic_sidebar( 'topbar' ); ?></div>



			<nav class="navbar navbar-expand-md" role="navigation">

						<div class="mmu-scrollcheck animate__fadeIn"><?php get_template_part( 'custom/php/templates/brand/logo/brand_and_logo_main_1' ); ?></div>

						<?php get_template_part( 'custom/php/templates/toggler/toggler_main_1' ); ?>
						
						<div id="navbarNavDropdown" class="navbar-collapse collapse" style="">

							
								

									<?php get_template_part( 'custom/php/templates/navbar/navbar_1', 'none' ); ?>

								
								
							
						
						</div>	
					

				</nav>

	</header><!-- #masthead -->