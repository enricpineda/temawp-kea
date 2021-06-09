<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Gagagagaga</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <?php wp_head();?>

</head>

<body>
<header>
<div id="logo-xarxes" class="bloc">
<div id="logo">
  <img src="<?php echo get_theme_file_uri('img/logo_esperanto.jpg');?>" />
</div>
<div id="idiomes-xarxes-correu">

    <div id="idiomes-cap">Idiomes</div>
    <div id="xarxes-cap">Xarxes socials</div>

  <div id="correu-cap">Accés al correu</div>
</div>
</div>
</header>
<nav>
  <div id="iconaburguer">
    <a href="#" onclick="montruMenuo(); return false;"><img src="<?php echo get_theme_file_uri('img/iconamenu.png');?>" class="toggle"/></a>
  </div>
  <div id="cercador">
<input type="search" /> <img src="<?php echo get_theme_file_uri('img/iconabuscar-blanc.svg');?>" class="sercxilo-telefono" /> <img src="<?php echo get_theme_file_uri('img/iconabuscar.svg');?>" class="sercxilo-granda" />
  </div>

  <div id="menupral">
  <?php wp_nav_menu( array( 'theme_location' => 'menusuperior' ) ); ?>
  </ul>
</div>
</nav>
