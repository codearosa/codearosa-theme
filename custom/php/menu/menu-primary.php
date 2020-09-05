<?php
/**
 * Template part : Bootstrap primary menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codearosa
 */

?>

	<?php wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'container_class' => 'collapse navbar-collapse',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'navbar-nav ml-auto',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'depth'           => 2,
											'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
										)
	); ?>
