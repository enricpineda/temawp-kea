<?php /* Template Name: portada 2021 */ ?>
<?php get_header();?>

<div id="carousel">
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <li class="glide__slide"><img src="http://localhost/proveskea/wp-content/uploads/2021/06/bs_amades-1.jpg" /></li>
        <li class="glide__slide"><img src="http://localhost/proveskea/wp-content/uploads/2021/06/bs_manifest-1.jpg" /></li>
        <li class="glide__slide"><img src="http://localhost/proveskea/wp-content/uploads/2021/06/bs_cursos-1.jpg" /></li>
      </ul>
    </div>
    
  </div>

</div>


<div id="principal">
<div id="menulateral"><?php wp_nav_menu( array( 'theme_location' => 'lateral-portada' ) ); ?>
<p></p>
<div id="twitter">
<a class="twitter-timeline" data-width="250" data-height="400" href="https://twitter.com/EsperantoCAT?ref_src=twsrc%5Etfw">Tweets by EsperantoCAT</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
</div>
<div id="central">
<h2><?php pll_e('Notícies');?></h2>
<?php
$arguments = array (
  'post_type' => 'post',
  'posts_per_page' => 1
);
$post_query = new WP_Query($arguments);
if ( $post_query -> have_posts() ) :
    while ( $post_query -> have_posts() ) : $post_query -> the_post();
    the_title( '<h3><a href="'.get_post_permalink().'">', '</a></h3>' );
    ?>
    <div class="noticia-gran">
  <div class="imatge-noticia"><?php the_post_thumbnail( 'thumbnail' );?></div>
  <div class="text-noticia">
    <?php
                the_excerpt();
        ?>
      </div></div><?php
    endwhile;
else:
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
wp_reset_postdata();
?>

<?php
$arguments = array (
  'post_type' => 'post',
  'posts_per_page' => 3,
  'offset' => 1
);
$post_query = new WP_Query($arguments);
if ( $post_query -> have_posts() ) :
    while ( $post_query -> have_posts() ) : $post_query -> the_post();
        the_title( '<h4>', '</h4>' );
    endwhile;
else:
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
wp_reset_postdata();
?>
</div>
<div id="agenda">
Agenda
</div>
</div>

<?php get_footer();?>
