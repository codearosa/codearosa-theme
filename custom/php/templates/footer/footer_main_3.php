<?php
/**
 * Footer Part for the main Footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearosa - melaniemueller.design
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );

?>


<div class="wrapper mmu-footer-main-3" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-4">

				<div class="site-info text-center">

					&copy; <?php echo date('Y'); ?> <a class="text-primary" href="<?php bloginfo( 'url' ); ?>"> <?php $protocols = array('http://', 'http://www.', 'www.', 'https://'); echo str_replace($protocols, '', get_bloginfo('wpurl')); ?></i></a>

				</div><!-- .site-info -->

			</div>
			
			<div class="col-md-4">

				<?php dynamic_sidebar( 'cr-footer-area' ); ?>	

			</div>

			<div class="col-md-4">
				
			<?php get_template_part( 'custom/php/menu/menu-social', 'none' ); ?>
			
			</div>

		</div><!-- row end -->
		

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


