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
		<header class="entry-header">

			<?php
			the_category(
				sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h3>'
			);
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?>

		</header><!-- .entry-header -->


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