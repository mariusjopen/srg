<?php

$theme = wp_get_theme();
$ver = $theme->get('Version');

remove_action( 'wp_head', 'wp_generator' );
add_filter( 'show_admin_bar', '__return_false' );
add_action( 'after_setup_theme', 'image_sizes' );
add_action( 'init', 'register_my_menu' );
add_action( 'init', 'register_my_menu_footer' );
add_filter('upload_mimes', 'allow_svgimg_types');
add_action('acf/init', 'my_acf_init');
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// QUERY SCRIPT AND CSS

function add_theme_scripts(){
	global $ver;
	wp_enqueue_script('app', get_template_directory_uri()."/js/min/combine.min.js", array( 'jquery' ), $ver);
	wp_enqueue_script('flickty', get_template_directory_uri()."/lib/flickity.pkgd.js", array( 'jquery' ), $ver);
  wp_enqueue_style('app-style', get_template_directory_uri()."/css/min/combine.min.css", array(), $ver);
}


// RESPONSIVE IMAGES

function image_sizes(){
	add_image_size( '_3200', 3200, 0, 0 );
	add_image_size( '_2560', 2560, 0, 0 );
	add_image_size( '_1920', 1920, 0, 0 );
	add_image_size( '_1280', 1280, 0, 0 );
	add_image_size( '_1024', 1024, 0, 0 );
	add_image_size( '_768', 768, 0, 0 );
	add_image_size( '_512', 512, 0, 0 );
	add_image_size( '_256', 256, 0, 0 );
}


// ACF CONTROL

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


// MENU

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

function register_my_menu_footer() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}


// SVG Uploads erlauben

function allow_svgimg_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}


// IMAGE CAPTIONS

function wp_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}


// GOOGLE MAPS

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDw3oHsgLHZxwQhCkb1KBETEPDCDQPsznI');
}


?>
