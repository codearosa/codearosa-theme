<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearosa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="google-site-verification" content="-uINR5_r8GTRbuaT-D2PF_6Cb8MvTfG5jMYxzlY6Rw4" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<?php get_template_part( 'custom/php/template-parts/preloader'); ?>

<body <?php body_class(); ?>>

<div id="page" class="site">


	<?php get_template_part( 'custom/php/templates/header/header_main_4'); ?>

	<div id="content" class="site-content">
