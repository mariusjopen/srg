<?php get_header(); ?>

<?php
$image_big = get_field('image_big');
include(locate_template('inc/image-big.php'));
?>

<?php
$image_slideshow = get_field('image_slideshow');
include(locate_template('inc/image-slideshow.php'));
?>

<?php get_footer(); ?>
