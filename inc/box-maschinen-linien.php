<!-- START BOX MASCHINEN LINIEN -->
<div class="box maschinen-linien">
	<div class="item linie-1">
		<div class="right">
			<?php
			$image_slideshow = get_field('linie_1_slide');
			include(locate_template('inc/image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<div class="technische-spez">
				<h4><?php echo get_field('elektronik_fertigung_technische_spezifikationen') ?><h4>
			</div>

			<div class="text">
				<?php echo get_field('linie_1_text') ?>
			</div>
		</div>
	</div>

	<div class="item linie-2">
		<div class="right">
			<?php
			$image_slideshow = get_field('linie_2_slide');
			include(locate_template('inc/image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<div class="technische-spez">
				<h4><?php echo get_field('elektronik_fertigung_technische_spezifikationen') ?><h4>
			</div>

			<div class="text">
				<?php echo get_field('linie_2_text') ?>
			</div>
		</div>
	</div>

	<div class="item linie-3">
		<div class="right">
			<?php
			$image_slideshow = get_field('linie_3_slide');
			include(locate_template('inc/image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<div class="technische-spez">
				<h4><?php echo get_field('elektronik_fertigung_technische_spezifikationen') ?><h4>
			</div>

			<div class="text">
				<?php echo get_field('linie_3_text') ?>
			</div>
		</div>
	</div>
</div>
<!-- END BOX MASCHINEN LINIEN -->
