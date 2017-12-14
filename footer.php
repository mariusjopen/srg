<div class="footer">
	<div class="top">
		<div class="footer-left">
			<div class="logo">
				<img src="<?php echo get_field('logo_small' , 'option'); ?>">
			</div>
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
			NEWSLETTER
		</div>

		<div class="item footer-right">
			<div class="social-media">
				ICONS
			</div>

			<div class="data">
				<p><?php echo get_field('data', 'option'); ?></p>
			</div>
		</div>
	</div>
</div>

	</div>

<?php wp_footer() ?>
</body>
</html>
