<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



		<?php get_template_part( 'custom/php/templates/single/single_2', 'single' ); ?>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
