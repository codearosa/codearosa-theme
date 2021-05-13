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

<hr class="mx-5">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-6">

				<?php dynamic_sidebar( 'mmu-footer-widget-1' ); ?>	

			</div>
			
			<div class="col-md-6">

				<?php dynamic_sidebar( 'mmu-footer-widget-2' ); ?>	

			</div>

		

		</div><!-- row end -->
		
		<div class="site-info text-center pt-3">

					&copy; <?php echo date('Y'); ?> <a class="text-primary" href="<?php bloginfo( 'url' ); ?>"> <?php $protocols = array('http://', 'http://www.', 'www.', 'https://'); echo str_replace($protocols, '', get_bloginfo('wpurl')); ?></i></a>

				</div><!-- .site-info -->
		

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


