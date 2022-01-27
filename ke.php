<?php /* Template Name: KE */ ?>
<?php get_header();?>


<div class="titol_post" style="background-image: url('<?php echo get_theme_file_uri('img/fons-general.jpeg');?>');" />
  <div class="titol-post-text">
<h1><?php pll_e("Kataluna Esperantisto");?></h1>
  </div>
</div>




<div id="principal-ke">
  <div style="display: block;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>
  <p><?php the_content();?></p>
<?php
endwhile;
endif;
?>
</div>
<div  style="display: block;"><h3><?php pll_e('Darrers números publicats');?></h3></div>
<div class="filaKE">
<?php


  $args = array(
      'post_type' => 'publicacions',
'cat' => '32',
      'posts_per_page' => 20,
      'orderby' => 'meta_value_num',
      'meta_key' => 'numero',
      'order' => 'DESC'
  );
  $consulta = new WP_Query($args);
  while ($consulta->have_posts()):
    $consulta->the_post();
    ?><div class="itemKE">
    <?php
    the_post_thumbnail( 'medium' );
    the_title('<p><a href="'.get_post_permalink().'">','</a></p>');
?></div><?php

endwhile;

?>

</div>

</div>

<?php get_footer();?>
