<?php get_header();?>

<div id="principal">
<div id="menulateral">Menú lateral</div>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
<h1><?php the_title();?></h1>
<p><?php the_content();?></p>
        <?php
    endwhile;
endif;
?>
</div>

<?php get_footer();?>
