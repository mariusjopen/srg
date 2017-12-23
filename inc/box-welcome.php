<!-- START BOX WELCOME -->
<div class="box welcome">

	<div class="left">
		<div class="logo-big">
			<img src="<?php echo get_field('logo_big' , 'option'); ?>">
		</div>

		<div class="headline">
			<?php echo get_field('text_welcome'); ?>
		</div>
	</div>

	<div class="right">
		<?php
		$image_slideshow = get_field('image_slideshow');
		include(locate_template('inc/element-image-slideshow.php'));
		?>
	</div>

</div>
<!-- END BOX WELCOME -->
