<!-- START MODUL MASCHINEN LINIEN -->
<?php
$string = $_SERVER['QUERY_STRING'] ;
$numSymbols = 17;
$res_string = substr($string, 0, $numSymbols);
$trimmed = ltrim($res_string, "data=");
$date_url = $trimmed;
?>


<div data="<?php echo $date_url; ?>" class="modul maschinen-linien <?php echo $modul_maschinen_linien_background_color; ?>">

	<div class="navigation-maschinen">

		<div class="top">
			<?php echo $modul_maschinen_linien_uberschrift; ?>
		</div>

		<div class="center">

			<div class="linien-nav">
				<div class="item linie-nav-1">
					<?php echo $modul_maschinen_linien_linie_1_uberschrift; ?>
				</div>

				<div class="item linie-nav-2">
					<?php echo $modul_maschinen_linien_linie_2_uberschrift; ?>
				</div>

				<div class="item linie-nav-3">
					<?php echo $modul_maschinen_linien_linie_3_uberschrift; ?>
				</div>
			</div>

		</div>

	</div>


	<div class="item linie-1">
		<div class="right">
			<?php
			$image_slideshow = $modul_maschinen_linien_linie_1_slide;
			include(locate_template('inc/element-image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<div class="technische-spez">
				<?php echo $modul_maschinen_linien_unter_uberschrift; ?>
			</div>

			<div class="text">
				<?php echo $modul_maschinen_linien_linie_1_text; ?>
			</div>
		</div>
	</div>

	<div class="item linie-2">
		<div class="right">
			<?php
			$image_slideshow = $modul_maschinen_linien_linie_2_slide;
			include(locate_template('inc/element-image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<div class="technische-spez">
				<?php echo $modul_maschinen_linien_unter_uberschrift; ?>
			</div>

			<div class="text">
				<?php echo $modul_maschinen_linien_linie_2_text; ?>
			</div>
		</div>
	</div>

	<div class="item linie-3">
		<div class="right">
			<?php
			$image_slideshow = $modul_maschinen_linien_linie_3_slide;
			include(locate_template('inc/element-image-slideshow.php'));
			?>
		</div>

		<div class="left">
			<div class="technische-spez">
				<?php echo $modul_maschinen_linien_unter_uberschrift; ?>
			</div>

			<div class="text">
				<?php echo $modul_maschinen_linien_linie_3_text; ?>
			</div>
		</div>
	</div>
</div>
<!-- END MODUL MASCHINEN LINIEN -->
