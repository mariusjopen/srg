<!-- START MODUL TEXT -->
<div id="<?php echo $modul_text_id; ?>" name="<?php echo $modul_text_id; ?>" class="modul text <?php echo $modul_text_background_color; ?>">

	<div class="left">
		<div class="headline">
			<?php echo $modul_text_uberschrift; ?>
		</div>

		<?php if( $modul_text_logo ): ?>
			<div class="logo-electronic">
					<img src="<?php echo $modul_text_logo; ?>">
			</div>
		<?php endif; ?>

	</div>

	<div class="right">
		<div class="text">
			<p><?php echo $modul_text_text; ?></p>

			<?php
			include(locate_template('inc/element-button.php'));
			?>

		</div>
	</div>

</div>

<!-- END MODUL TEXT -->
