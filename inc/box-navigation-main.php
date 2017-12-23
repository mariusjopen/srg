<!-- START BOX NAVIGATION MAIN -->
<div class="box navigation-main">
	<a href="<?php echo get_home_url(); ?>"><img class="logo-red" src="<?php echo get_field('logo_small_red' , 'option'); ?>"></a>
	<?php	wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
<!-- END BOX NAVIGATION MAIN -->
