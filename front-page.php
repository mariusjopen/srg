<?php get_header(); ?>

<?php
include(locate_template('inc/box-welcome.php'));
?>

<div class="box lalala">

	<div class="left">
		<div class="headline">
			<h2><?php echo get_field('text_welcome'); ?></h2>
		</div>
	</div>

	<div class="right">
		<?php
		$image_slideshow = get_field('image_slideshow');
		include(locate_template('inc/image-slideshow.php'));
		?>
	</div>

</div>

<?php
include(locate_template('inc/box-welcome.php'));
?>

<?php get_footer(); ?>
