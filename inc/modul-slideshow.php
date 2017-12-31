<!-- START MODUL SLIDESHOW -->
<div class="modul slideshow <?php echo $modul_slideshow_background_color; ?>">

	<div class="mobil left">
		<p><?php echo $modul_slideshow_text_gros; ?><p>
	</div>

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




	<div class="colour <?php if( !$modul_slideshow_text_klein ): ?>inactive<?php endif; ?> <?php echo $modul_slideshow_background_color_2; ?>">
		<div class="left">
			<?php echo $modul_slideshow_text_klein; ?>
		</div>
	</div>

</div>
<!-- END MODUL SLIDESHOW -->
