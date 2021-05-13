<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('col-sm'); ?> id="post-<?php the_ID(); ?>">

	<div class="card">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		<header class="entry-header mt-2">

						
			<?php
			the_category();?>
			
		</header><!-- .entry-header -->

		<?php the_title(
				sprintf( '<h4 class="entry-title card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h4>'
			);
			?>


			<div class="entry-content">

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					)
				);
				?>

			</div><!-- .entry-content -->
	</div><!--.card -->


</article><!-- #post-## -->