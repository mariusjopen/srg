<?php get_header(); ?>

<?php
include(locate_template('inc/box-navigation-blocks.php'));
?>

<div class="sticky">
	<?php
	include(locate_template('inc/box-navigation-blocks.php'));
	?>
</div>

<?php
include(locate_template('inc/box-technische-beratung.php'));
?>

<?php
include(locate_template('inc/box-technische-beratung-slide.php'));
?>

<?php
include(locate_template('inc/box-material.php'));
?>

<?php
include(locate_template('inc/box-elektronik-fertigung.php'));
?>

<?php
include(locate_template('inc/box-navigation-maschinen.php'));
?>

<?php
include(locate_template('inc/box-maschinen-linien.php'));
?>

<?php
include(locate_template('inc/box-montage.php'));
?>

<?php
$image_big = get_field('montage_bild');
include(locate_template('inc/image-big.php'));
?>

<?php
include(locate_template('inc/box-logistik.php'));
?>

<?php
include(locate_template('inc/box-logistik-slide.php'));
?>

<?php get_footer(); ?>
