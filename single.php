<?php /* Template Name: portada 2021 */ ?>
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

  <div class="post-text-principal">
<?php the_content();?></div>
<div class="post-columna-dreta">

  <h3><?php pll_e("Compartir");?></h3>

<h3><a href="#"><?php pll_e("Arxiu de notícies");?></a>

</div>



</div>
<?php
endwhile;
endif;
?>
<?php get_footer();?>
