<?php


/**
*Enable Font preload
*/

add_action( 'wp_head', function () {
    $fonts_dir_localfont = get_stylesheet_directory_uri() . '/custom/localfont/childtheme_fonts/';
    $fonts_dir_fontawesome = get_stylesheet_directory_uri() . '/custom/localfont/fontawesome/';
    $fonts_dir_variableFont = get_stylesheet_directory_uri() . '/custom/localfont/variable_font/';


	?>


<link rel="preload" href="<?php echo $fonts_dir_variableFont . 'Raleway-VariableFont_wght.ttf' ?>" as="font" type="font/ttf" crossorigin="anonymous">
<link rel="preload" href="<?php echo $fonts_dir_variableFont . 'Raleway-Italic-VariableFont_wght.ttf' ?>" as="font" type="font/ttf" crossorigin="anonymous">


<?php } );