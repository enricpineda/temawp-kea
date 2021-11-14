<?php
function add_theme_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'glidecss', get_template_directory_uri().'/css/glide.core.min.css');
wp_enqueue_script( 'script', get_template_directory_uri().'/js/glide.min.js', 1.0, true);
wp_enqueue_script( 'glidejs', get_template_directory_uri() . '/funcions.js', 1.1, true);

}

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid)))
               return true;   // we're at the page or at a sub page
	else
               return false;  // we're elsewhere
};

function register_my_menus() {
  register_nav_menus(
    array(
      'menusuperior' => __( 'Menú superior' ),
      'lateral-portada' => __( 'Menú lateral portada' ),
      'menusupkej' => __( 'Menú superior KEJ'),
      'lateralportadakej' => __ ( 'Menú lateral portada KEJ')
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
pll_register_string("cercar", "Cercar");
pll_register_string("compartir", "Compartir");
pll_register_string("arxiu", "Arxiu de notícies");
pll_register_string("agenda", "Agenda");
pll_register_string("quan", "Quan?");
pll_register_string("on", "On?");
pll_register_string("gener", "de gener");
pll_register_string("febrer", "de febrer");
pll_register_string("març", "de març");
pll_register_string("abril", "d'abril");
pll_register_string("maig", "de maig");
pll_register_string("juny", "de juny");
pll_register_string("juliol", "de juliol");
pll_register_string("agost", "d'agost");
pll_register_string("setembre", "de setembre");
pll_register_string("octubre", "d'octubre");
pll_register_string("novembre", "de novembre");
pll_register_string("desembre", "de desembre");

add_action('init', 'events_init');
function events_init() {
	$args = array(
		'labels' => array(
			'name' => __('Esdeveniments'),
			'singular_name' => __('Esdeveniment'),
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array("slug" => "esdeveniments"),
		'supports' => array('thumbnail','editor','title','custom-fields')
	);
	register_post_type( 'events' , $args );
}
?>
