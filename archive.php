<?php /* Template Name: portada 2021 */ ?>
<?php get_header();?>

?>
<div class="titol_post" style="background-image: url('<?php echo get_theme_file_uri('img/fons-general.jpeg');?>');" />
  <div class="titol-post-text">
<h1>Notícies</h1>
  </div>
</div>




<div id="principal">
<div>
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
</div>

</div>

<?php get_footer();?>
