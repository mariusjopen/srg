<!-- START MODUL TEXT -->
<div class="modul text <?php echo $modul_text_background_color; ?>">

	<div class="left">
		<div class="headline">
			<h2><?php echo $modul_text_uberschrift; ?></h2>
		</div>

		<div class="logo-electronic">
			<?php if( $modul_text_logo ): ?>
				<img src="<?php echo $modul_text_logo; ?>">
			<?php endif; ?>
		</div>
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
