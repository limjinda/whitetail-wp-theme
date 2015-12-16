<?php 

/**
 * THEME SETUP
 */

function jinda_setup(){
	
	/**
	 * ADD THEME SUPPORT
	 */
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote',
	) );
	
	/**
	 * REGISTER NAV MENU
	 */
	register_nav_menu( 'top', 'Top navigation' );
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
 * VERSION 1.0
 */

function get_thumbnail_url( $id, $size ){
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), $size );
	$url = $thumb['0'];
	return $url;
}

/**
 * CUSTOMIZE ARCHIVE TITLE
 * VERSION 1.0
 */

add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	}
	return $title;
});

?>