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
      'lateralportadakej' => __ ( 'Menú lateral portada KEJ'),
			'interiorkea' => __ ('Menú interior KEA'),
			'interiorkej' => __ ('Menú INterior KEJ')
     )
   );
 }

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );

function area_widgets_interior() {

	register_sidebar( array(
		'name'          => 'Lateral pàgines interiors',
		'id'            => 'lateral-interiors',
		'description'   => 'La banda de la dreta de les pàgines interiors',
		'before_widget' => '<div id="menulateral">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'area_widgets_interior' );


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
pll_register_string("agenda-esdeveniments", "Agenda d'esdeveniments");
pll_register_string("privacitat", "Política de privacitat");
pll_register_string("cookies", "Política de cookies");
pll_register_string("avis-legal", "Avś legal");
pll_register_string("darrers-numeros-publicats", "Darrers números publicats");
pll_register_string("descarrega", "Descàrrega");
pll_register_string("numeros-publicats", "Números publicats");
pll_register_string("arxiu-publicats", "Accedeix a l'arxiu");
pll_register_string("descarrega-ke", "Descarrega't aquest número de KE");

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

add_action('init', 'publicacions_init');
function publicacions_init() {
	$args = array(
		'labels' => array(
			'name' => __('Publicacions'),
			'singular_name' => __('Publicació'),
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array("slug" => "publicacions"),
		'supports' => array('thumbnail','editor','title','custom-fields')
	);
	register_post_type( 'publicacions' , $args );
}

function reg_cat() {
         register_taxonomy_for_object_type('category','publicacions');
}
add_action('init', 'reg_cat');

?>
