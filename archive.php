<?php /* Template Name: arxiu */ ?>
<?php get_header();?>


<div class="titol_post" style="background-image: url('<?php echo get_theme_file_uri('img/fons-general.jpeg');?>');" />
  <div class="titol-post-text">
<h1><?php pll_e("Arxiu de notícies");?></h1>
  </div>
</div>




<div id="principal">
<div>
<?php


  $args = array(
      'post_type' => 'post',
      'category_name' => 'anuncis-i-noticies',

      'posts_per_page' => 20,
      'orderby' => 'date',
      'order' => 'DESC'
  );
  $consulta = new WP_Query($args);
  while ($consulta->have_posts()):
    $consulta->the_post();
    ?>
    <div class="noticia-gran">
<div class="imatge-noticia"><?php the_post_thumbnail( 'thumbnail' );?></div>
  <div class="text-noticia">
    <?php
    the_date('d/m/Y');
    the_title('<h2><a href="'.get_post_permalink().'">','</a></h2>');
the_excerpt();
echo "</div></div><p></p>";
endwhile;

?>

</div>

</div>

<?php get_footer();?>
