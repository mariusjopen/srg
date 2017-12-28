<!-- START FLEXIBLE MODULS -->
<div class="flexible-moduls">

	<?php
	if( have_rows('moduls') ):

	    while ( have_rows('moduls') ) : the_row();

	        if( get_row_layout() == 'modul_link' ):

						$modul_link_background_color = get_sub_field('background_color');
						$element_link = get_sub_field('link', false, false);
	        	include(locate_template('inc/modul-link.php'));

	        elseif( get_row_layout() == 'modul_text' ):

						$element_button_text = get_sub_field('button_text');
						$element_button = get_sub_field('button');
						$modul_text_background_color = get_sub_field('background_color');
						$modul_text_uberschrift = get_sub_field('uberschrift');
						$modul_text_text = get_sub_field('text');
						$modul_text_logo = get_sub_field('logo');
						$modul_text_id = get_sub_field('id');
						$modul_text_logo_size = get_sub_field('logo_size');

	        	include(locate_template('inc/modul-text.php'));



					elseif( get_row_layout() == 'modul_linien' ):

						$modul_linien_link_to_field = get_sub_field('link_to_field');
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

						$element_button_text = get_sub_field('button_text');
						$element_button = get_sub_field('button');
						$modul_slideshow_background_color = get_sub_field('background_color');
						$modul_slideshow_background_color_2 = get_sub_field('background_color_2');
						$image_slideshow = get_sub_field('slideshow');
						$modul_slideshow_text_gros = get_sub_field('text_gros');
						$modul_slideshow_text_klein = get_sub_field('text_klein');

	        	include(locate_template('inc/modul-slideshow.php'));

					elseif( get_row_layout() == 'modul_image' ):

						$element_image = get_sub_field('image');
						include(locate_template('inc/modul-image.php'));

					elseif( get_row_layout() == 'modul_slideshow_textbox' ):

						$modul_slideshow_textbox_background_color = get_sub_field('background_color');
						$image_slideshow = get_sub_field('slideshow');
						$modul_slideshow_textbox_text = get_sub_field('text');
						$modul_slideshow_textbox_text_gros = get_sub_field('text_gros');

	        	include(locate_template('inc/modul-slideshow-textbox.php'));

					elseif( get_row_layout() == 'modul_maschinen_linien' ):

						$modul_maschinen_linien_background_color = get_sub_field('background_color');
						$modul_maschinen_linien_uberschrift = get_sub_field('uberschrift');
						$modul_maschinen_linien_unter_uberschrift = get_sub_field('unter_uberschrift');
						$modul_maschinen_linien_linie_1_uberschrift = get_sub_field('linie_1_uberschrift');
						$modul_maschinen_linien_linie_1_slide = get_sub_field('linie_1_slide');
						$modul_maschinen_linien_linie_1_text = get_sub_field('linie_1_text');
						$modul_maschinen_linien_linie_2_uberschrift = get_sub_field('linie_2_uberschrift');
						$modul_maschinen_linien_linie_2_slide = get_sub_field('linie_2_slide');
						$modul_maschinen_linien_linie_2_text = get_sub_field('linie_2_text');
						$modul_maschinen_linien_linie_3_uberschrift = get_sub_field('linie_3_uberschrift');
						$modul_maschinen_linien_linie_3_slide = get_sub_field('linie_3_slide');
						$modul_maschinen_linien_linie_3_text = get_sub_field('linie_3_text');

						$image_slideshow = get_field('linie_1_slide');
	        	include(locate_template('inc/modul-maschinen-linien.php'));

					elseif( get_row_layout() == 'modul_maps' ):

						$modul_maps_text = get_sub_field('maps_text');
						$modul_maps_map = get_sub_field('maps_map');

						include(locate_template('inc/modul-maps.php'));

					elseif( get_row_layout() == 'modul_contact' ):

						$modul_contact_uberschrift = get_sub_field('contact_uberschrift');
						$modul_contact_text = get_sub_field('contact_text');
						$modul_contact_form = get_sub_field('contact_form');
						$modul_contact_background_color = get_sub_field('background_color');

						include(locate_template('inc/modul-contact.php'));

					elseif( get_row_layout() == 'modul_people' ):

						$modul_people_uberschrift = get_sub_field('uberschrift');

						include(locate_template('inc/modul-people.php'));

					elseif( get_row_layout() == 'modul_background_link' ):

						$modul_background_link_uberschrift = get_sub_field('uberschrift');
						$modul_background_link_text = get_sub_field('text');
						$modul_background_link_link = get_sub_field('link');
						$modul_background_link_image = get_sub_field('image');

	        	include(locate_template('inc/modul-background-link.php'));

					elseif( get_row_layout() == 'modul_background_text' ):

						$modul_background_link_uberschrift = get_sub_field('uberschrift');
						$modul_background_link_image = get_sub_field('image');

	        	include(locate_template('inc/modul-background-text.php'));

					elseif( get_row_layout() == 'modul_big_text' ):

						$modul_background_big_text_uberschrift = get_sub_field('uberschrift');
						$modul_background_big_text_small = get_sub_field('small');
						$modul_background_big_text_big = get_sub_field('big');
						$modul_background_big_text_background_color = get_sub_field('background_color');

	        	include(locate_template('inc/modul-big-text.php'));

					elseif( get_row_layout() == 'modul_text_accordeon' ):

						$modul_text_accordeon_background_color = get_sub_field('background_color');
						$modul_text_accordeon_uberschrift = get_sub_field('uberschrift');
						$modul_text_accordeon_text = get_sub_field('text');

						include(locate_template('inc/modul-text-accordeon.php'));

        endif;

	    endwhile;

	else :
	    // no layouts found
	endif;
	?>

</div>
<!-- END FLEXIBLE MODULS -->
