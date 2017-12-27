<!-- START MODUL PEOPLE -->
<div class="modul people">

	<div class="left">
		<div class="headline">
			<?php echo $modul_people_uberschrift; ?>
		</div>
	</div>

	<div class="right">

		<?php
		if( have_rows('repeater') ):
	    while ( have_rows('repeater') ) : the_row();

			$modul_people_image = get_sub_field('image');
			$modul_people_text = get_sub_field('text');
			?>

			<div class="item">
				<div class="image">

				  <?php
				  $size = '_768';
				  if( $modul_people_image ) {
				    echo wp_get_attachment_image( $modul_people_image, $size );
				  }
				  ?>

				</div>

				<div class="text">
					<?php echo $modul_people_text; ?>
				</div>
			</div>

			<?php
	    endwhile;
		else :
		endif;
		?>


	</div>

</div>

<!-- END MODUL PEOPLE -->
