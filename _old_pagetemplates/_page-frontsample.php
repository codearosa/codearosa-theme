<?php
/**
 * Template Name: Page Frontpage sample
 *
 */

get_header();
?>

	<div id="primary" class="content-area mx-auto">
		<main id="main" class="site-main d-block text-center">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content-frontpagesample', 'page' );

		get_template_part( 'template-particles/comments' );

	endwhile; // End of the loop.
	?>



	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();?>
