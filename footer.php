<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer text-center" id="colophon">


					<?php wp_nav_menu(
						array(
							'theme_location'  => 'socialmenu',
							'container_class' => 'navbar-text socialmenuclass',
							'container_id'    => 'socialmenuthree',
							'menu_class'      => 'nav m-0',
							'fallback_cb'     => '',
							'menu_id'         => 'socialmenu-three',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>


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
