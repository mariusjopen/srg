<!-- START IMAGE SLIDESHOW -->
<?php if( $image_slideshow ): ?>

<div class="image-slideshow">
		<div class="main-carousel">
			<?php
			$size = '_768';
			if( $image_slideshow ):
				foreach( $image_slideshow as $image_slide ):
				?>

				<div class="carousel-cell">
					<?php echo wp_get_attachment_image( $image_slide['ID'], $size ); ?>
				</div>

				<?php
				endforeach;
			endif;
			?>
		</div>
</div>

<?php endif; ?>
<!-- END IMAGE SLIDESHOW -->
