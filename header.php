<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="description" content="<?php echo get_option('jinda_opt_site_description') ?>">
  <meta name="keywords" content="<?php echo get_option('jinda_opt_site_keywords') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta property="og:image" content="<?php echo get_option('jinda_opt_site_og_image') ?>" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/img/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicons/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/img/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php echo get_template_directory_uri()?>/img/favicons/manifest.json">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri()?>/img/favicons/safari-pinned-tab.svg">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri()?>/img/favicons/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>
<body <?php body_class('night-theme'); ?>>
  <?php echo get_option('jinda_opt_company_js') ?>
	<div class="wrapper">

    <!-- theme switch -->
    <div class="theme-switch-block">
      <a href="javascript:void(0)" id="day_time">
        <img src="<?php echo get_template_directory_uri() ?>/img/day.png" alt="Day time" />
      </a>
      <a href="javascript:void(0)" id="night_time">
        <img src="<?php echo get_template_directory_uri() ?>/img/night.png" alt="Day time" />
      </a>
    </div>
    <!-- theme switch -->

		<header class="header">
			<div class="container">
				<div class="clearfix mxn2 px2">
					<div class="sm-col sm-col-5 lg-col-4">
						<?php echo is_home() ? "<h1 class='site-title'>".get_bloginfo('name')."</h1>" : "<h2 class='site-title'>".get_bloginfo('name')."</h2>" ?>
						<h2 class="site-tagline"><?php echo bloginfo('description'); ?></h2>
					</div>
					<div class="sm-col sm-col-7 lg-col-8">
						<nav class="site-navigation">
							<?php
								wp_nav_menu(array('theme_location' => 'top', 'container' => false, 'menu_class' => 'list-reset clearfix', 'items_wrap' => '<ul class="%2$s">%3$s</ul>'));
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>
