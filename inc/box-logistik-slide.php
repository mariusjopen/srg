<!-- START BOX LOGISTIK SLIDE -->
<div class="box logistik-slide">
		<div class="right">
			<?php
			$image_slideshow = get_field('logistik_slide');
			include(locate_template('inc/image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<div class="technische-spez">
				<h4><?php echo get_field('logistik_power') ?><h4>
			</div>

			<div class="text">
				<?php echo get_field('logistik_text_long') ?>
			</div>
		</div>
	</div>
</div>
<!-- END BOX LOGISTIK SLIDE -->
