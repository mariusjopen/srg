<!-- START MODUL MANY MAPS -->
<div class="modul many-maps ">

	<div class="all">
		<div class="inside">
			<?php
			if( have_rows('repeater') ):
		    while ( have_rows('repeater') ) : the_row();

				$modul_many_maps_map = get_sub_field('map');
				$modul_many_maps_text = get_sub_field('text');
				$modul_many_maps_logo = get_sub_field('logo');
				$modul_many_maps_link = get_sub_field('link');
				$modul_many_maps_url = get_sub_field('url');
				?>

				<div class="item">

					<div class="map">
						<?php if( !empty($modul_many_maps_map) ): ?>

							<div class="acf-map">
								<div class="marker" data-lat="<?php echo $modul_many_maps_map['lat']; ?>" data-lng="<?php echo $modul_many_maps_map['lng']; ?>"></div>
							</div>

						<?php endif; ?>
					</div>

					<div class="logo">
						<img src="<?php echo $modul_many_maps_logo ?>">
					</div>

					<div class="text">
						<?php echo $modul_many_maps_text ?>
					</div>

					<div class="link">
						<a href="<?php echo $modul_many_maps_url ?>"><?php echo $modul_many_maps_link ?></a>
					</div>

				</div>

				<?php
		    endwhile;
			else :
			endif;
			?>

		</div>
	</div>

</div>

<!-- END MODUL MANY MAPS -->
