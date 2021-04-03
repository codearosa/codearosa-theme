<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Codearosa
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="row single_2">

	<header class="entry-header mb-3">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

			<div class="jumbotron-fluid d-flex h-100">
			
				<div class="container align-self-center">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
									
						<p class="lead"><?php understrap_posted_on(); ?></p>
  				
				</div>
  			</div>

	</header><!-- .entry-header -->

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				

					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						
						<?php get_template_part( 'custom/php/templates/single_content/single-content_2', 'single' ); ?>

						<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->
