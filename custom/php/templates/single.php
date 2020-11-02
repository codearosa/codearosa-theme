<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Codearosa
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<header class="entry-header">
		<div class="post-thumbail">
    		<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
		</div><!-- post-thumbnail -->
		<div class="card-header">
          <small class=""><p><?php the_category( ' ' ); ?></p></small>
        </div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
	</header><!-- .entry-header -->

<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'custom/php/templates/single-content', 'single' ); ?>

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