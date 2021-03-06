<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<div class="text-center border border-primary rounded p-3"><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></div>

	<header class="entry-header">



		<?php the_title( '<h1 class="entry-title my-4">', '</h1>' ); ?>



	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<div class="entry-meta border border-primary my-3">

			<?php codearosa_posted_on(); ?>

		</div><!-- .entry-meta -->

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
