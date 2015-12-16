<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/basscss/css/basscss.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="<?php echo get_template_directory_uri(); ?>/lib/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <!-- livereload -->
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  <!-- livereload -->
</head>
<body <?php body_class(); ?>>

	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="clearfix mxn2">
					<div class="col col-12 px2">
						<?php echo is_home() ? "<h1 class='site-title'>Jir4yu.me</h1>" : "<h2 class='site-title'>Jir4yu.me</h2>" ?>
						<p class="site-tagline"><?php echo bloginfo('description'); ?></p>
						<nav class="site-navigation">
							<?php  
								wp_nav_menu(array('theme_location' => 'top', 'container' => false, 'menu_class' => 'list-reset clearfix', 'items_wrap' => '<ul class="%2$s">%3$s</ul>'));
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>