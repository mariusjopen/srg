<!-- START BOX TECHNSICHE BERATUNG SLIDE -->
<div class="box technische-beratung-slide">

	<div class="beige">
		<div class="right">
			<?php
			$image_slideshow = get_field('technologische_beratung_slider');
			include(locate_template('inc/image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<div class="text">
				<h2><?php echo get_field('technologische_beratung_fragen') ?></h2>
			</div>

			<div class="button">
				<a href="<?php echo get_field('technologische_beratung_ansprechen_link') ?>">
					<?php echo get_field('technologische_beratung_ansprechen') ?>
				</a>
			</div>
		</div>
	</div>

	<div class="white">
	
	</div>

</div>
<!-- END BOX TECHNSICHE BERATUNG SLIDE -->
