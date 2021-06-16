<form action="/" method="get">
    <input type="text" name="s" id="search" placeholder="<?php pll_e("Cercar");?>" value="<?php the_search_query(); ?>" />
    <input type="image" alt="<?php pll_e("Cercar");?>" src="<?php echo get_theme_file_uri('img/iconabuscar-blanc.svg');?>" class="sercxilo-telefono" />
    <input type="image" alt="<?php pll_e("Cercar");?>" src="<?php echo get_theme_file_uri('img/iconabuscar.svg');?>" class="sercxilo-granda" />
</form>
