<?php get_header(); ?>

<?php /* Template Name: NORMAL */ ?>

<?php if( get_field('layout') == 'narrow' ): ?>
	<div class="simple">
<?php endif; ?>

	<?php
	include(locate_template('inc/box-flexible-moduls.php'));
	?>

<?php if( get_field('narrow') == 'narrow' ): ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
