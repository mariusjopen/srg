<!-- START BOX NAVIGATION MOBILE -->
<div class="box navigation-mobile">
<div class="placeholder"></div>

	<div class="inside-mobile mobil">

		<a href="<?php echo get_home_url(); ?>">
			<img class="logo-nav" src="<?php echo get_field('logo_small_red' , 'option'); ?>"></a>
		</a>

	 <div class="burger-wrapper">
		 <div id="burger" class="burger"></div>
	 </div>

	</div>


	<div class="slideout mobil">

		<?php	wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

	</div>
</div>
<!-- END BOX NAVIGATION MOBILE -->
