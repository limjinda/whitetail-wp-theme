<?php 

/**
 * THEME SETUP
 */

function jinda_setup(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote',
	) );
}
add_action('after_setup_theme', 'jinda_setup');

/**
 * EXCERPT
 */

function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '..';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * THUMBNAIL
 */

function get_thumbnail_url( $id, $size ){
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), $size );
	$url = $thumb['0'];
	return $url;
}

?>