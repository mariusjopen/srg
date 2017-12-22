<!-- START FLEXIBLE MODULS -->
<div class="flexible-moduls">

	<?php
	if( have_rows('moduls') ):

	    while ( have_rows('moduls') ) : the_row();

	        if( get_row_layout() == 'modul_link' ):

						$page_link = get_sub_field('link', false, false);
	        	include(locate_template('inc/box-link.php'));

	        elseif( get_row_layout() == 'download' ):

	        	$file = get_sub_field('file');

	        endif;

	    endwhile;

	else :
	    // no layouts found
	endif;
	?>

</div>
<!-- END FLEXIBLE MODULS -->
