<?php /* Template Name: novetat KEA */ ?>
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

  <h3><?php pll_e("Quan?");?></h3>
  <p><?php
  //$ladata = get_post_meta(the_ID());
  $datafinal= $post->Data;
  $llocfinal = $post->Lloc;
  //echo $datafinal;
  $mesos = array(
    "01" => "de gener",
    "02" => "de febrer",
    "03" => "de març",
    "04" => "d'abril",
    "05" => "de maig",
    "06" => "de juny",
    "07" => "de juliol",
    "08" => "d'agost",
    "09" => "de setembre",
    "10" => "d'octubre",
    "11" => "de novembre",
    "12" => "de desembre"
  );
  $dataformat = DateTime::createFromFormat('Ymd', $datafinal);
  $elmes = $mesos[$dataformat->format("m")];
  echo $dataformat->format("d");
  if (get_bloginfo('language') == "eo") {echo "a ";} else {echo " ";}
pll_e($elmes);
  echo " de ".$dataformat->format("Y");
  ?></p>
<h3><?php pll_e("On?");?></h3>
<p><?php echo $llocfinal;?></p>
  <h3><?php pll_e("Compartir");?></h3>
  <?php if (pll_current_language() == "eo") :
    $link = "agendo-de-okazajoj";
  else:
    $link = "agenda-desdeveniments";
  endif;
  ?>
<h3><a href="/<?php echo $link;?>/"><?php pll_e("Agenda d'esdeveniments");?></a>

</div>



</div>
<?php
endwhile;
endif;
?>
<?php get_footer();?>
