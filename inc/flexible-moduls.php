<!-- START FLEXIBLE MODULS -->
<div class="flexible-moduls">

	<?php
	if( have_rows('moduls') ):

	    while ( have_rows('moduls') ) : the_row();

	        if( get_row_layout() == 'modul_link' ):

						$element_link = get_sub_field('link', false, false);
	        	include(locate_template('inc/modul-link.php'));

	        elseif( get_row_layout() == 'modul_text' ):

						$modul_text_uberschrift = get_sub_field('uberschrift');
						$modul_text_text = get_sub_field('text');
						$modul_text_logo = get_sub_field('logo');
	        	include(locate_template('inc/modul-text.php'));

					elseif( get_row_layout() == 'modul_linien' ):

						$modul_linien_hintergrund = get_sub_field('linien_hintergrund');
						$modul_linien_uberschrift = get_sub_field('linien_uberschrift');
						$modul_linien_uberschrift_l1 = get_sub_field('linien_uberschrift_l1');
						$modul_linien_text_l1 = get_sub_field('linien_text_l1');
						$modul_linien_uberschrift_l2 = get_sub_field('linien_uberschrift_l2');
						$modul_linien_text_l2 = get_sub_field('linien_text_l2');
						$modul_linien_uberschrift_l3 = get_sub_field('linien_uberschrift_l33');
						$modul_linien_text_l3 = get_sub_field('linien_text_l3');
						$modul_linien_alle = get_sub_field('linien_alle');

	        	include(locate_template('inc/modul-linien.php'));

					elseif( get_row_layout() == 'modul_slideshow' ):

						$image_slideshow = get_sub_field('slideshow');
						$modul_slideshow_text_gros = get_sub_field('text_gros');
						$modul_slideshow_text_klein = get_sub_field('text_klein');

	        	include(locate_template('inc/modul-slideshow.php'));

					elseif( get_row_layout() == 'modul_image' ):

						$element_image = get_sub_field('image');
						include(locate_template('inc/modul-image.php'));

	        endif;

	    endwhile;

	else :
	    // no layouts found
	endif;
	?>

</div>
<!-- END FLEXIBLE MODULS -->
