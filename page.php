<?php /* Template Name: interior KEA */ ?>
<?php get_header();?>


<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
    <div class="titol_post" style="background-image: url('<?php

    $imatge = get_the_post_thumbnail_url(get_the_ID(), 'full' );
    if ($imatge == "") { echo get_theme_file_uri('img/fons-general.jpeg');}
    else {echo $imatge;}
    ?>
    ');" />
      <div class="titol-post-text">
<h1><?php the_title();?>
      </div>
    </div>


<div id="principal">

  <div class="post-text-principal">
<?php the_content();?></div>
<div class="post-columna-dreta">

  <h3><?php pll_e("Compartir");?></h3>


</div>



</div>
<?php
endwhile;
endif;
?>
<?php get_footer();?>
