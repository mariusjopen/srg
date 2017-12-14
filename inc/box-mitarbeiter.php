<!-- START BOX MITARBEITER -->
<div class="box mitarbeiter">

<div class="white">
	<div class="right">
		<?php
		$image_slideshow = get_field('mitarbeiter_slideshow');
		include(locate_template('inc/image-slideshow.php'));
		?>
	</div>

	<div class="left">
		<h2><?php echo get_field('mitarbeiter_text_gros') ?></h2>
	</div>
</div>

<div class="blue">
	<div class="left">
		<p-2><?php echo get_field('mitarbeiter_text_klein') ?></p-2>
	</div>
</div>

<div class="link">
	<h3><a href=""><?php echo get_field('mitarbeiter_link') ?></a></h3>
</div>

</div>
<!-- END BOX MITARBEITER -->
