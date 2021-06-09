<?php
function add_theme_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_script( 'script', get_template_directory_uri() . '/funcions.js', 1.1, true);
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
?>
