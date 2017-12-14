
<?php
$image_big = get_field('image_big');
include(locate_template('inc/image-big.php'));
?>

<!-- START IMAGE BIG -->
<?php if( $image_big ): ?>

	<div class="image-big">
	  <?php
	  $size = '_2560';
	  if( $image_big ) {
	    echo wp_get_attachment_image( $image_big, $size );
	  }
	  ?>
	</div>

<?php endif; ?>
<!-- END IMAGE BIG -->
