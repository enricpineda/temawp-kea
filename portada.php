<?php /* Template Name: portada 2021 */ ?>
<?php get_header();?>

<div id="principal">
<div id="menulateral"><?php wp_nav_menu( array( 'theme_location' => 'lateral-portada' ) ); ?>
<p></p>
<div id="twitter">
<a class="twitter-timeline" data-width="250" data-height="400" href="https://twitter.com/EsperantoCAT?ref_src=twsrc%5Etfw">Tweets by EsperantoCAT</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
</div>
<div id="central">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
<h1><?php the_title();?></h1>
<p><?php the_content();?></p>
        <?php
    endwhile;
endif;
?></div>
<div id="agenda">
Agenda
</div>
</div>

<?php get_footer();?>
