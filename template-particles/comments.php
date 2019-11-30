<?php
/**
 * Template part : Bootstrap comments in container
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codearosa
 */

?>

<div class="container">
<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
  comments_template();
endif;
?>
</div>
