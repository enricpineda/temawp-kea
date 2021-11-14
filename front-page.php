<?php /* Template Name: portada 2021 */ ?>
<?php get_header();?>

<div id="carousel">
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <li class="glide__slide"><img src="/wp-content/uploads/2021/06/bs_amades-1.jpg" /></li>
        <li class="glide__slide"><img src="/wp-content/uploads/2021/06/bs_manifest-1.jpg" /></li>
        <li class="glide__slide"><img src="/wp-content/uploads/2021/06/bs_cursos-1.jpg" /></li>
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
  <?php if (pll_current_language() == "eo") :
    $link = "arhivo-de-novajoj";
  else:
    $link = "arxiu-de-noticies";
  endif;
  ?>
<h2><a href="<?php echo $link;?>"><?php pll_e('Notícies');?></a></h2>
<?php
$arguments = array (
  'post_type' => 'post',
  'category_name' => 'anuncis-i-noticies',
  'posts_per_page' => 1
);
$post_query = new WP_Query($arguments);
if ( $post_query -> have_posts() ) :
    while ( $post_query -> have_posts() ) : $post_query -> the_post();
    the_title( '<h3 class="titular-primer"><a href="'.get_post_permalink().'">', '</a></h3>' );
    ?>
    <div class="noticia-gran">
<div class="imatge-noticia"><?php the_post_thumbnail( 'thumbnail' );?></div>
  <div class="text-noticia">
    <?php
                the_excerpt();
        ?>
      </div>

    </div><?php
    endwhile;
else:
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
wp_reset_postdata();
?>
<div class="container-secundaries">
<?php
$arguments = array (
  'post_type' => 'post',
  'category_name' => 'anuncis-i-noticies',
  'posts_per_page' => 3,
  'offset' => 1
);
$post_query = new WP_Query($arguments);
if ( $post_query -> have_posts() ) :
    while ( $post_query -> have_posts() ) : $post_query -> the_post();
    ?>
<div class="noticiasecundaria">
    <?php
        the_title( '<h4><a href="'.get_post_permalink().'">', '</a></h4>' );
        ?>
      </div>
        <?php
    endwhile;
else:
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
wp_reset_postdata();
?>
</div>
</div>
<div id="agenda">
<h2><?php pll_e('Agenda');?></h2>

<?php
$arguments = array (
  'post_type' => 'events',
  //'category_name' => 'esdeveniments',
  'posts_per_page' => '5'
);
$post_query = new WP_Query($arguments);
if ( $post_query -> have_posts() ) :
    while ( $post_query -> have_posts() ) : $post_query -> the_post();
    ?>
    <div class="agenda-item">

      <div class="agenda-titol"><?php the_title( '<h3><a href="'.get_post_permalink().'"><strong>', '</strong></a></h3>' ); ?></div>
      <div class="agenda-data">
      <?php

$ladata = get_post_meta(get_the_ID());
$datafinal= $ladata['Data'][0];
$llocfinal = $ladata['Lloc'][0];
//echo $datafinal;
$date = DateTime::createFromFormat('Ymd', $datafinal);
echo '<img src="/wp-content/themes/keatema/img/calendar-svgrepo-com.svg" class="miniicona" /> '.$date->format('Y-m-d')."<br />";
echo '<img src="/wp-content/themes/keatema/img/location-sign-svgrepo-com.svg" class="miniicona" /> '.$llocfinal;
      ?>   </div>
    </div>
    <?php




    endwhile;
else:
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
wp_reset_postdata();
?>

</div>
</div>

<?php get_footer();?>
