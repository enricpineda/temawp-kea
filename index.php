<?php get_header();?>

<div id="menulateral">Menú lateral</div>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Display post content
    endwhile;
endif;
?>

<div id="footer"></div>
  <script src="js/scripts.js"></script>
  <script src="funcions.js"></script>

</body>
</html>
