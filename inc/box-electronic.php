<!-- START BOX ELECTRONIC -->
<div class="box electronic">

	<div class="left">
		<div class="headline">
			<h2><?php echo get_field('uberschrift_electronic'); ?></h2>
		</div>

		<div class="logo-electronic">
			<img src="<?php echo get_field('logo_electronic'); ?>">
		</div>
	</div>

	<div class="right">
		<div class="text">
			<p><?php echo get_field('text_electronic'); ?></p>
		</div>

		<div class="link">
			<p-3>
				<?php
				$page_link = get_field('link_electronic', false, false);
				include(locate_template('inc/page-link.php'));
				?>
			</p-3>
		</div>
	</div>

</div>
<!-- END BOX ELECTRONIC -->
