<!-- START MODUL SLIDESHOW -->
<div class="modul slideshow <?php echo $modul_slideshow_background_color; ?>">

	<div class="white">
		<div class="right">
			<?php
			include(locate_template('inc/element-image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<p><?php echo $modul_slideshow_text_gros; ?><p>

			<?php
			include(locate_template('inc/element-button.php'));
			?>
		</div>
	</div>

	<div class="colour <?php echo $modul_slideshow_background_color_2; ?>">
		<div class="left">
			<?php echo $modul_slideshow_text_klein; ?>
		</div>
	</div>

</div>
<!-- END MODUL SLIDESHOW -->
