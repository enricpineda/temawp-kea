<?php /* Template Name: novetat KEA */ ?>
<?php get_header();?>


<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
    <div class="titol_post" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full' );?>');" />
      <div class="titol-post-text">
        <?php the_date('d/m/Y'); ?>
<h1><?php the_title();?>
      </div>
    </div>


<div id="principal">

  <div class="post-text-principal">
<?php the_content();?></div>
<div class="post-columna-dreta">

  <!--<h3><?php pll_e("Compartir");?></h3>-->

<h3>
  <?php
  if (pll_current_language() == "eo") :
  echo '<a href="/arhivo-de-novajoj/">';

else:
    echo '<a href="/arxiu-de-noticies/">';
  endif; ?>
    <?php pll_e("Arxiu de notícies");?></a>
</h3>
</div>



</div>
<?php
endwhile;
endif;
?>
<?php get_footer();?>
