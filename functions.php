<?php
function add_theme_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'glidecss', get_template_directory_uri().'/css/glide.core.min.css');
wp_enqueue_script( 'script', get_template_directory_uri().'/js/glide.min.js', 1.0, true);
wp_enqueue_script( 'glidejs', get_template_directory_uri() . '/funcions.js', 1.1, true);

}

function register_my_menus() {
  register_nav_menus(
    array(
      'menusuperior' => __( 'Menú superior' ),
      'lateral-portada' => __( 'Menú lateral portada' )
     )
   );
 }

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );

// Cadenes de text a traduir
pll_register_string("entrada-correu", "Accés al correu");
pll_register_string("donem-suport", "Donem suport");
pll_register_string("noticies", "Notícies");

?>
