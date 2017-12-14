<!-- START PAGE LINK -->
<?php if( $page_link ): ?>
	<a href="<?php echo get_the_permalink($page_link); ?>">
		<?php echo get_the_title($page_link); ?>
	</a>
<?php endif; ?>
<!-- END PAGE LINK -->
