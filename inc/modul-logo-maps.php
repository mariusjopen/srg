<!-- START MODUL LOGO MAPS -->
<div class="modul logo-maps">

	<div class="top">
		<?php echo $modul_logo_maps_uberschrift ?>
	</div>

	<div class="image">
		<?php
	  $size = '_2560';
	  if( $modul_logo_maps_image ) {
	    echo wp_get_attachment_image( $modul_logo_maps_image, $size );
	  }
	  ?>
	</div>

</div>
<!-- END MODUL LOGO MAPS -->
