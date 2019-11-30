<?php
/**
 * Template Name: With slider and sidebar
 *
 */

get_header();
?>
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

		<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
 	<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

    <div class="carousel-item">
      <?php the_post_thumbnail('featured-slider'); ?>

<div class="carousel-caption d-none d-md-block">
	<p><?php the_tags('', ' • ', '<br />' ); ?></p>
	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
</div>

    </div>

		<?php
	endwhile;
	wp_reset_postdata();
	?>
	<script>    jQuery( document ).ready(function() {
        jQuery('#carouselExampleIndicators > div > div:nth-child(1)').addClass("active");
    });</script>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


	<div id="primary" class="content-area row mt-3">
		<main id="main" class="site-main col d-block">

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
