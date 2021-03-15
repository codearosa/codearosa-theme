<?php


/**
*Enable Font preload
*/

add_action( 'wp_head', function () {
    $fonts_dir_localfont = get_stylesheet_directory_uri() . '/custom/localfont/childtheme_fonts/';
    $fonts_dir_fontawesome = get_stylesheet_directory_uri() . '/custom/localfont/fontawesome/';
    $fonts_dir_variableFont = get_stylesheet_directory_uri() . '/custom/localfont/variable_font/';


	?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="preload" href="<?php echo $fonts_dir_variableFont . 'Raleway-VariableFont_wght.ttf' ?>" as="font" type="font/ttf" crossorigin="anonymous">
<link rel="preload" href="<?php echo $fonts_dir_variableFont . 'Raleway-Italic-VariableFont_wght.ttf' ?>" as="font" type="font/ttf" crossorigin="anonymous">

<link rel="preload" href="<?php echo $fonts_dir_fontawesome . 'fa-brands-400.woff2' ?>" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="<?php echo $fonts_dir_fontawesome . 'fa-regular-400.woff2' ?>" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="<?php echo $fonts_dir_fontawesome . 'fa-solid-900.woff2' ?>" as="font" type="font/woff2" crossorigin="anonymous">


<?php } );