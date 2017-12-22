<!-- START MODUL IMAGE -->
<?php if( $element_image ): ?>

	<div class="modul image">
	  <?php
	  $size = '_2560';
	  if( $element_image ) {
	    echo wp_get_attachment_image( $element_image, $size );
	  }
	  ?>
	</div>

<?php endif; ?>
<!-- END MODUL IMAGE -->
