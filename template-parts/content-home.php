<?php
/**
 * Template part for displaying posts on Blogpage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>

	<div class="card">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		if ( 'post' === get_post_type() ) :
			?>

				<div class="card-img-top entry-header"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>

				<div class="card-body">
      			<h5 class="card-title entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
      			<p class="card-text entry-content">
							<?php the_excerpt(); ?>
						</p>
      			<p class="entry-meta card-text"><small class="text-muted entry-meta">
				<?php understrap_posted_on(); ?>
			<!-- .entry-meta --></small></p>
    		</div>
		<?php endif; ?>


</article><!-- #post-<?php the_ID(); ?> -->
</div>
