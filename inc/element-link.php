<!-- START ELEMENT LINK -->
<?php if( $element_link ): ?>
	<a href="<?php echo get_the_permalink($element_link); ?>">
		<?php echo get_the_title($element_link); ?>
	</a>
<?php endif; ?>
<!-- END ELEMENT LINK -->
