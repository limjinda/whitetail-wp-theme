<?php 
/**
 * THEME SETUP
 */

define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );
require_once( THEME_DIR . '/jindatheme/theme-options.php' );

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

	add_image_size( 'grid', 600, 450, array('center', 'center') );
	
	/**
	 * REGISTER NAV MENU
	 */
	register_nav_menu( 'top', 'Top navigation' );
}
add_action('after_setup_theme', 'jinda_setup');

function whitetail_content_width() {
	$content_width = 960;
	$GLOBALS['content_width'] = apply_filters( 'whitetail_content_width', $content_width );
}
add_action( 'after_setup_theme', 'whitetail_content_width', 0 );

/**
 * ENQUEUE SCRIPTS & STYLES
 */

function jinda_scripts(){
	wp_enqueue_style('whitetail-core', get_stylesheet_uri(), array(), '3.1.2' );
	wp_enqueue_script('whitetail-core-js', THEME_URI.'/js/lib/client.min.js', array('jquery'), '3.1.2', true );
	wp_enqueue_script('autotrack', THEME_URI.'/lib/autotrack.custom.js', array('jquery'), '3.1.2', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jinda_scripts' );

/**
 * ADMIN ENQUEUE
 * ADD BOOTSTRAP TO ADMIN DASHBOARD
 */
function jinda_admin_enqueue($hook){
	// if ( 'toplevel_page_jindamenu-options' != $hook ) {
	if ( 'appearance_page_jindamenu-options' != $hook ) {
		wp_enqueue_style('jindatheme_shortcode_css', THEME_URI . '/jindatheme/jinda-mce-button.css');
		return;
	}
	wp_enqueue_style('jquery_icheck_css', THEME_URI . '/bower_components/iCheck/skins/flat/orange.css');
	wp_enqueue_style('jquery_ionicons_css', THEME_URI . '/bower_components/Ionicons/css/ionicons.min.css');
	wp_enqueue_style('bootstrap_css', THEME_URI . '/bower_components/bootstrap/dist/css/bootstrap.min.css');
	wp_enqueue_style('scroll_css', THEME_URI . '/lib/jquery.mCustomScrollbar.min.css');
	wp_enqueue_style('code_mirror_css', THEME_URI . '/bower_components/codemirror/lib/codemirror.css');
	wp_enqueue_style('code_mirror_monokai', THEME_URI . '/bower_components/codemirror/theme/monokai.css');
	wp_enqueue_style('jindatheme_admin_css', THEME_URI . '/jindatheme/options-ui.css');
	if(function_exists( 'wp_enqueue_media' )){
		wp_enqueue_media();
	}else{
		wp_enqueue_style('thickbox');
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
	}
	wp_enqueue_script('bootstrap_script', THEME_URI . '/bower_components/bootstrap/dist/js/bootstrap.min.js');
	wp_enqueue_script('jquery_form_script', THEME_URI . '/lib/jquery.form.min.js');
	wp_enqueue_script('jquery_icheck_script', THEME_URI . '/bower_components/iCheck/icheck.min.js');
	wp_enqueue_script('jquery_scroll_script', THEME_URI . '/lib/jquery.mCustomScrollbar.min.js');
	wp_enqueue_script('jquery_codemirror_script', THEME_URI . '/bower_components/codemirror/lib/codemirror.js');
	wp_enqueue_script('jquery_codemirror_xml', THEME_URI . '/bower_components/codemirror/mode/xml/xml.js');
	wp_enqueue_script('jquery_codemirror_css', THEME_URI . '/bower_components/codemirror/mode/css/css.js');
	wp_enqueue_script('jquery_codemirror_javascript', THEME_URI . '/bower_components/codemirror/mode/javascript/javascript.js');
	wp_enqueue_script('jindatheme_admin_script', THEME_URI . '/jindatheme/options-ui.js');
}
add_action('admin_enqueue_scripts', 'jinda_admin_enqueue');

/**
 * EXCERPT
 */

function custom_excerpt_length( $length ) {
	return 7;
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

/**
 * ADD CUSTOM TINYMCE BUTTON
 * VESION 1.5
 **/

add_action( 'init', 'jinda_editor_button' );
add_editor_style('css/editor-style.css');
function jinda_editor_button(){
  add_filter( "mce_external_plugins", "jinda_add_buttons" );
  add_filter( 'mce_buttons', 'jinda_register_buttons' );
}

function jinda_add_buttons( $plugin_array ) {
  $plugin_array['jinda_buttons'] = get_template_directory_uri() . '/custom-button.js';
  return $plugin_array;
}
function jinda_register_buttons( $buttons ) {
  array_push( $buttons, 'dropcap', 'vdoyoutube', 'vdovimeo', 'responsivebtn' ); 
  return $buttons;
}

/**
 * THEME SHORTCODE
 * VESION 1.5
 **/

add_shortcode( 'youtube', 'youtube_shortcode' );
function youtube_shortcode($atts, $content = null){
  $new_link = substr(strstr($content, "="), 1);
  return '<iframe src="//www.youtube.com/embed/'. $new_link .'" frameborder="0"></iframe>';
}

add_shortcode( 'vimeo', 'vimeo_shortcode' );
function vimeo_shortcode($atts, $content = null){
  $new_link = substr(strstr($content, "com/"), 4);
  return '<iframe src="//player.vimeo.com/video/'. $new_link .'?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
}

add_shortcode( 'responsive', 'responsive_shortcode' );
function responsive_shortcode($atts, $content = null){
  return $content;
}


?>