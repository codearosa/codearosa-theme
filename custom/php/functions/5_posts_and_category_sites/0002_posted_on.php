<?php 
/**
*
*Codearosa posted on
*/
function codearosa_posted_on() {
/*Author pics*/
$get_author_id = get_the_author_meta('ID');
$get_author_gravatar = get_avatar_url($get_author_id, array("size"=>150));
$gravatar_image = '<img src="'.$get_author_gravatar.'" alt="" class="rounded-circle text-center wp-image-10"/>';
/*author description*/
$author_meta = nl2br(get_the_author_meta('description'));
/*get author mail*/
$author_mail = (get_the_author_meta('user_email'));

  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() ),
    esc_attr( get_the_modified_date( 'c' ) ),
    esc_html( get_the_modified_date() )
  );
  $posted_on   = apply_filters(
    'understrap_posted_on', sprintf(
      '<span class="posted-on">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
      esc_html_x( 'Veröffentlicht am', 'post date', 'understrap' ),
      esc_url( get_permalink() ),
      apply_filters( 'understrap_posted_on_time', $time_string )
    )
  );
  $byline      = apply_filters(
    'understrap_posted_by', sprintf(
      '<span class="byline"> %1$s<span class="author vcard"><a class="url fn n" href="%2$s"> %3$s</a></span></span>',
      $posted_on ? esc_html_x( 'von', 'post author', 'understrap' ) : esc_html_x( 'Posted by', 'post author', 'understrap' ),
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
      esc_html( get_the_author() )
    )
  );
  echo '<div class="text-center my-2">'.$gravatar_image.'</div>
        <div class="container text-center"><div class="m-4 lead">'.$author_meta.'</div>
        <a href="mailto:'.$author_mail.'" class="my-3 btn btn-primary text-white" role="button">Arbeite mit mir</a></div>'; // WPCS: XSS OK.
}
