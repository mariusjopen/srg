<!-- START MODUL MAPS -->
<div class="modul maps">

	<div class="left">
		<div class="text">
			<?php echo $modul_maps_text ?>
		</div>
	</div>

	<div class="right">
		<div class="map">
			<?php if( !empty($modul_maps_map) ): ?>

				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $modul_maps_map['lat']; ?>" data-lng="<?php echo $modul_maps_map['lng']; ?>"></div>
				</div>

			<?php endif; ?>
		</div>
	</div>

</div>

<!-- END MODUL MAPS -->
