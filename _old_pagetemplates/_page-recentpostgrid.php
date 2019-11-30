<?php
/**
 * Template Name: Page with Recent post grid
 *
 */

get_header();
?>

	<div id="primary" class="content-area container mx-auto row mt-3">
		<main id="main" class="site-main col d-block">

					<div class="card-deck">
					<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

 						 <div class="card">
   						 <?php the_post_thumbnail('medium'); ?>
    						<div class="card-body">
     						 <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
     				 <h1 class="card-text"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    						</div>
    						<div class="card-footer">
      						<small class="text-muted"><p><?php the_tags('', ' • ', '<br />' ); ?></p></small>
    						</div>
  						</div>

							<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<div class="col-lg-4">
	<?php get_sidebar();?>
</div>
</div><!-- #primary -->

<?php
get_footer();?>

</div>
