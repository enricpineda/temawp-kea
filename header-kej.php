<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="Kataluna Esperanto Junularo - KEJ">
  <meta name="author" content="KEJ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <?php wp_head();?>

</head>

<body>
<header>
<div id="logo-xarxes" class="bloc">
<div id="logo">
  <a href="<?php echo get_home_url();?>">
  <img src="<?php echo get_theme_file_uri('img/logo-kea-vector.svg');?>" />
</a>
</div>
<div id="idiomes-xarxes-correu">

    <div id="idiomes-cap"><?php pll_the_languages(array('hide_current' => 1));?></div>
    <div id="xarxes-cap">

      <div><a href="https://www.facebook.com/kejesperantocat/" target="_blank"><img src="<?php echo get_theme_file_uri('img/icona-facebook.svg');?>"/></a></div>
      <div><a href="https://www.instagram.com/kejesperanto/" target="_blank"><img src="<?php echo get_theme_file_uri('img/icona-instagram.svg');?>"/></a></div>
      <div><a href="https://twitter.com/kejesperanto" target="_blank"><img src="<?php echo get_theme_file_uri('img/icona-twitter.svg');?>"/></a></div>



    </div>

  <div id="correu-cap"><a href="https://poshto.esperanto.cat" target="_blank"><?php pll_e('Accés al correu');?></a></div>
</div>
</div>
</header>
<nav>
  <div id="iconaburguer">
    <a href="#" onclick="montruMenuo(); return false;"><img src="<?php echo get_theme_file_uri('img/iconamenu.png');?>" class="toggle"/></a>
  </div>
  <div id="cercador">
  <?php get_search_form(); ?>
  </div>

  <div id="menupral">
  <?php wp_nav_menu( array( 'theme_location' => 'menusupkej' ) ); ?>
  </ul>
</div>
</nav>
