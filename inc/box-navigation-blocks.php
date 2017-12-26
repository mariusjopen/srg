<!-- START BOX NAVIGATION BLOCKS -->
<div class="box navigation-blocks">
	<div class="center">
		<div class="top">
			<?php echo get_field('navigation_text'); ?>
		</div>
	</div>

	<div class="center">
		<div class="navi-block">

			<?php
			if( have_rows('navigation_repeater') ):
			  while ( have_rows('navigation_repeater') ) : the_row();
			  ?>

				<div class="item" data="<?php echo get_sub_field('navigation_id'); ?>">
					<div class="word">
						<?php echo get_sub_field('navigation_text'); ?>
					</div>

					<div class="image">
						<img src="<?php echo get_sub_field('navigation_image'); ?>">
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
<!-- END BOX NAVIGATION BLOCKS -->
