<?php
/**
 * Template part : Bootstrap based recent post grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codearosa
 */

?>
<div class="container my-2">
<div class="card-deck">
<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

   <div class="card">
     <?php the_post_thumbnail('full'); ?>
      <div class="card-body">
       <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
   <div class="card-text"><?php the_excerpt(); ?></div>
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
  </div>
