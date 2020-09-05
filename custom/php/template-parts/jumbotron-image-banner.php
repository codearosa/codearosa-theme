<?php
/**
 * Template part : jumbotron bootstrap based Image Banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codearosa
 */

?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full', true) ); ?>
    <div class="jumbotron jumbotron-fluid overlayed bg-white m-0 p-0">
      <div class="overlayimage"><img class="jumbotronimage" src="<?php echo $url ?>" alt="Card image"></div>
            <div class="overlay p-3">
          <?php
          if ( is_singular() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
          else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;
           ?>
            <p class="lead">Werde online sichtbar.</p>
            <a href="https://codearosa.de/ueber-mich/" class="btn btn-primary text-white" role="button">Über mich</a>
            <a href="mailto:webmaster@codearosa.de?subject=Interesse%20Webdesign" class="btn btn-primary text-white" role="button">Kontakt</a>
            </div>
    </div>
