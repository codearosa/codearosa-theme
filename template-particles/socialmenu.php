<?php
/**
 * Template part : Bootstrap socialmenuone
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codearosa
 */

?>

<?php wp_nav_menu(
  array(
    'theme_location'  => 'socialmenu',
    'container_class' => 'navbar-text socialmenuclass',
    'menu_class'      => 'nav m-0',
    'fallback_cb'     => '',
    'depth'           => 2,
    'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
  )
); ?>
