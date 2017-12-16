<?php get_header(); ?>

<?php
include(locate_template('inc/box-welcome.php'));
?>

<?php
include(locate_template('inc/box-grafik.php'));
?>

<?php
include(locate_template('inc/box-electronic.php'));
?>

<?php
include(locate_template('inc/box-linien.php'));
?>

<?php
include(locate_template('inc/box-mitarbeiter.php'));
?>

<?php
$image_big = get_field('image_big');
include(locate_template('inc/image-big.php'));
?>

<?php get_footer(); ?>
