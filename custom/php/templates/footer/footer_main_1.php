<?php
/**
 * Footer Part for the main Footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearosa - melaniemueller.design
 */


?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer text-center" id="colophon">

					<?php get_template_part( 'custom/php/menu/menu-social', 'none' ); ?>

						<div class="site-info text-center">

							&copy; 2009 – <?php echo date('Y'); ?> <a class="text-primary" href="<?php echo site_url(); ?>"> <?php bloginfo( 'name' ); ?></i></a>


					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
