<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw3oHsgLHZxwQhCkb1KBETEPDCDQPsznI"></script>
	</head>

	<body <?php body_class(); ?> >

		<div class="wrapper">

			<div class="navi-hide">
				<?php
				include(locate_template('inc/box-navigation-main.php'));
				?>
			</div>

			<div class="navi-empty">
				<?php
				include(locate_template('inc/box-navigation-main.php'));
				?>
			</div>

			<?php
			include(locate_template('inc/box-navigation-mobile.php'));
			?>
