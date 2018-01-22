<!-- START BOX GRAFIK -->
<div class="box grafik">
	<div class="center">
		<div class="top">
			<p><?php echo get_field('text_oben'); ?></p>
		</div>

		<div class="bottom">
			<div class="item text-left">
				<?php echo get_field('grafik_text_links'); ?>
			</div>

			<div class="item line">
			</div>

			<a href="<?php echo get_field('grafik_link'); ?>">
				<div class="item block">
					<?php echo get_field('grafik_text_mitte'); ?>
				</div>
			</a>

			<div class="item line">
			</div>

			<div class="item text-right">
				<?php echo get_field('grafik_text_rechts'); ?>
			</div>
		</div>

	</div>
</div>
<!-- END BOX GRAFIK -->
