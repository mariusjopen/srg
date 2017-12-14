<!-- START BOX LINIEN -->
<div class="box linien" style="background-image: url(<?php echo get_field('hintergrund_linien'); ?>)">
	<div class="top">
		<h2><?php echo get_field('uberschrift_linien'); ?></h2>
	</div>

	<div class="item-container">
		<div class="item">
			<div class="sub-headline">
				<?php echo get_field('uberschrift_linie_1'); ?>
			</div>

			<div class="inhalt">
				<?php echo get_field('text_linie_1'); ?>
			</div>
		</div>

		<div class="item">
			<div class="sub-headline">
				<?php echo get_field('uberschrift_linie_2'); ?>
			</div>

			<div class="inhalt">
				<?php echo get_field('text_linie_2'); ?>
			</div>
		</div>

		<div class="item">
			<div class="sub-headline">
				<?php echo get_field('uberschrift_linie_3'); ?>
			</div>

			<div class="inhalt">
				<?php echo get_field('text_linie_3'); ?>
			</div>
		</div>
	</div>

	<div class="link">
		<h3><?php echo get_field('alle_linien_anzeigen'); ?></h3>
	</div>
</div>
<!-- END BOX LINIEN -->
