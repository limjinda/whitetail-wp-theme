<?php 
function jindaAdmin_menu() {
	add_theme_page('JindaMenu Theme Options', 'Jinda Options', 'manage_options', 'jindamenu-options', 'jinda_admin_options_callback');
	// add_menu_page('JindaMenu Theme Options', 'Jinda Options', 'manage_options', 'jindamenu-options', 'jinda_admin_options_callback', 'dashicons-chart-area', 1991);
	add_action('admin_init', 'register_jindaAdmin_settings');
}
add_action('admin_menu', 'jindaAdmin_menu');

function register_option_menu(){
	echo '<h3>See Jinda Options in sidebar menu</h3>';
}

function register_jindaAdmin_settings() {
	/**
	 * GENERAL SETTINGS
	 * VERSION 1.0
	 */
	register_setting('jindaAdmin-general-group', 'jinda_opt_site_description' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_site_keywords' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_site_og_image' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_company_footer' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_company_js' );
	/**
	 * SOCIAL NETWORKS
	 * VERSION 1.0
	 */
	register_setting('jindaAdmin-general-group', 'jinda_opt_enable_facebook' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_facebook_url' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_enable_twitter' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_twitter_url' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_enable_google_plus' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_google_plus_url' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_enable_instagram' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_instagram_url' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_enable_linkedin' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_linkedin_url' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_enable_github' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_github_url' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_enable_500px' );
	register_setting('jindaAdmin-general-group', 'jinda_opt_500px_url' );
}

function jinda_admin_options_callback() {
	if( !current_user_can('manage_options') ){
		wp_die('You dont have permission to access this page;');
	} 
	require_once( dirname( __FILE__ ) . '/options-ui.php');
}

?>