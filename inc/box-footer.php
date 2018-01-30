<!-- START BOX FOOTER -->
<div class="footer">
	<div class="top">
		<div class="footer-left">
	
		</div>

		<div class="footer-middle">
			<div class="navigation">
				<?php	wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			</div>
		</div>

		<div class="footer-right">
		</div>
	</div>

	<div class="bottom">
		<div class="item footer-left">
			<div class="email">
				<p><a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a></p>
			</div>

			<div class="telefon">
				<p><span>T</span><?php echo get_field('telefon', 'option'); ?></p>
			</div>

			<div class="fax">
				<p><span>F</span><?php echo get_field('fax', 'option'); ?></p>
			</div>

			<div class="adresse">
				<p><?php echo get_field('adresse', 'option'); ?></p>
			</div>
		</div>

		<div class="item footer-middle">


			<?php echo do_shortcode('[mc4wp_form id="420"]'); ?>



		</div>

		<div class="item footer-right">
			<div class="social-media">
				<?php
				if( have_rows('social_media', 'option') ):
			    while ( have_rows('social_media', 'option') ) : the_row();
					?>
					<div class="social">
						<a target="_blank" href="<?php echo get_sub_field('social_link'); ?>">
							<img src="<?php echo get_sub_field('social_bild'); ?>">
						</a>
					</div>
					<?php
			    endwhile;
				else :
				endif;
				?>
			</div>

			<div class="data">
				<p><?php echo get_field('data', 'option'); ?></p>
			</div>
		</div>
	</div>

	<div class="mobil">

		<div class="inside">
			<div class="logo">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('logo_small' , 'option'); ?>"></a>
			</div>

			<div class="social-media">
				<?php
				if( have_rows('social_media', 'option') ):
			    while ( have_rows('social_media', 'option') ) : the_row();
					?>
					<div class="social">
						<a target="_blank" href="<?php echo get_sub_field('social_link'); ?>">
							<img src="<?php echo get_sub_field('social_bild'); ?>">
						</a>
					</div>
					<?php
			    endwhile;
				else :
				endif;
				?>
			</div>
		</div>

		<div class="item hidden-left">
			<div class="email">
				<p><a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a></p>
			</div>

			<div class="telefon">
				<p><span>T</span><?php echo get_field('telefon', 'option'); ?></p>
			</div>

			<div class="fax">
				<p><span>F</span><?php echo get_field('fax', 'option'); ?></p>
			</div>

			<div class="adresse">
				<p><?php echo get_field('adresse', 'option'); ?></p>
			</div>

			<div class="data">
				<p><?php echo get_field('data', 'option'); ?></p>
			</div>
		</div>

	</div>

</div>
<!-- END BOX FOOTER -->
