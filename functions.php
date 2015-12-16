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
	
	/**
	 * REGISTER NAV MENU
	 */
	register_nav_menu( 'top', 'Top navigation' );
}
add_action('after_setup_theme', 'jinda_setup');

/**
 * ENQUEUE SCRIPTS & STYLES
 */

function jinda_scripts(){
	wp_enqueue_style('basecss', THEME_URI.'/bower_components/basscss/css/basscss.min.css');
	wp_enqueue_style('whitetail-core', get_stylesheet_uri() );

	wp_deregister_script('jquery');
	wp_register_script('jquery', THEME_URI.'/lib/jquery-1.11.2.min.js', array(), '1.11.2', true );
	wp_enqueue_script('jquery');

	wp_enqueue_script('modernizr', THEME_URI.'/lib/modernizr-2.8.3-respond-1.4.2.min.js' );
	wp_enqueue_script( 'trmix', THEME_URI.'/bower_components/trmix/dist/trmix.min.js', array('jquery'), '0.9', true );
	wp_enqueue_script( 'matchheight', THEME_URI.'/bower_components/matchHeight/jquery.matchHeight-min.js', array('jquery'), '0.9', true );
	wp_enqueue_script( 'whitetail-core', THEME_URI.'/js/main.js', array('jquery'), '0.9', true );
}
add_action( 'wp_enqueue_scripts', 'jinda_scripts' );

/**
 * ADMIN ENQUEUE
 * ADD BOOTSTRAP TO ADMIN DASHBOARD
 */
function jinda_admin_enqueue($hook){
	if ( 'toplevel_page_jindamenu-options' != $hook ) {
		wp_enqueue_style('jindatheme_shortcode_css', THEME_URI . '/jindatheme/jinda-mce-button.css');
		return;
	}
	wp_enqueue_style('jquery_icheck_css', THEME_URI . '/bower_components/iCheck/skins/flat/orange.css');
	wp_enqueue_style('jquery_ionicons_css', THEME_URI . '/bower_components/ionicons/css/ionicons.min.css');
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

/**
 * CUSTOM TITLE TAG
 */
function theme_name_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );


?>