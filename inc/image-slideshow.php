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

						<?php
						$image_array =  wp_get_attachment($image_slide['ID']);
						$image_array_caption = $image_array["caption"];

						if( $image_array_caption ):
						?>

							<div class="caption">
								<?php echo $image_array_caption; ?>
							</div>

						<?php endif; ?>
					</div>



					<?php
					endforeach;
				endif;
				?>
			</div>
	</div>

<?php endif; ?>
<!-- END IMAGE SLIDESHOW -->
