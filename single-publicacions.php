<?php get_header();?>


<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
    <div class="titol_post" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full' );?>');" />
      <div class="titol-post-text">
<h1><?php the_title();?>
      </div>
    </div>


<div id="principal">
<div class="portada-publicacio">
<?php the_post_thumbnail( 'full' );?>
</div>
  <div class="post-text-principal">
<?php the_content();?></div>
<div class="post-columna-dreta">
  <?php
  $fitxer = get_field('arxiu_descarrega');
  if ($fitxer) {
    $adreca_fitxer = $fitxer['url'];
  ?>
  <h3><?php pll_e("Descàrrega");?></h3>
  <p><a href="<?php echo esc_attr($adreca_fitxer);?>"><?php pll_e("Descarrega't aquest número de KE");?></a></p>
<?php } ?>
<h3><?php pll_e("Números publicats");?></h3>
<p><?php pll_e("Accedeix a l'arxiu");?></p>


</div>



</div>
<?php
endwhile;
endif;
?>
<?php get_footer();?>
