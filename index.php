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
</head>
<body <?php body_class(); ?>>

	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="clearfix">
					<div class="col col-12">
						<?php echo is_home() ? "<h1 class='site-title'>Jir4yu.me</h1>" : "<h2 class='site-title'>Jir4yu.me</h2>" ?>
						<p class="site-tagline"><?php echo bloginfo('description'); ?></p>
						<nav class="site-navigation">
							<?php  
								wp_nav_menu(array('theme_location' => 'top', 'container' => false, 'menu_class' => 'list-reset', 'items_wrap' => '<ul class="%2$s">%3$s</ul>'));
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<main class="main">
			<div class="container">
				<div class="clearfix mxn2">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col col-4 px1">
							<div class="grid-content-block">
								<figure>
								<?php if (has_post_thumbnail()): ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><img src="<?php echo get_thumbnail_url($post->ID, 'full') ?>" alt="<?php echo get_the_title() ?>" title="<?php echo get_the_title(); ?>"></a>
								<?php else: ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><img src="http://www.placehold.it/600x400" title="<?php echo get_the_title(); ?>"></a>
								<?php endif ?>
								</figure>
								<h3 class="grid-title"><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title(); ?></a></h3>
								<p class="grid-text"><?php echo get_the_excerpt(); ?></p>
							</div>
						</div>
					<?php endwhile; else: ?>
						<!-- no post found -->
					<?php endif; ?>
				</div>

				<!-- page pagination -->
				<div class="page-pagination-block">
					<div class="clearfix mxn2">
						<div class="col col-6 px1 right-align">
							<?php get_previous_posts_link() ? previous_posts_link("<span class='icon icon-arrow-left'></span> ดูเรื่องที่ใหม่กว่า") : "" ?>&nbsp;
						</div>
						<div class="col col-6 px1">
							&nbsp;<?php get_next_posts_link() ? next_posts_link("ย้อนไปดูเรื่องเก่าๆ <span class='icon icon-arrow-right'></span>") : "" ?>
						</div>
					</div>
				</div>
				<!-- /page pagination -->

			</div>
		</main>

		<footer class="footer">
			<div class="container">
				<div class="clearfix">
					<div class="col col-12 center">
						<ul class="list-reset social-list">
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png" class="social-image" alt="Facebook"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" class="social-image" alt="Twitter"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/google_plus.png" class="social-image" alt="Google Plus"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.png" class="social-image" alt="Instagram"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.png" class="social-image" alt="Linkedin"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/github.png" class="social-image" alt="Github"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/500px.png" class="social-image" alt="500px"></a></li>
						</ul>
						<p class="footer-text">
							All posts in <?php echo get_bloginfo('name'); ?> was written by <a href="https://plus.google.com/114178088498011147130?rel=author" target="_blank" title="Jirayu Limjinda">Jirayu Limjinda</a> under <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" title="Creative Commons" target="_blank">CC BY-NC-ND 4.0</a>
						</p>
						<p class="credit-text"><a href="#" target="_blank" title="WhiteTail WordPress Theme">WhiteTail</a> is an opensource WordPress Theme by <a href="http://www.jindatheme.com" target="_blank" title="JindaTheme">JindaTheme</a></p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div id="search-container" class="search-bar">
		<form action="/">
			<input type="text" placeholder="ฉันกำลังมองหา.." class="w-tb" />
			<a href="javascript:closeSearch()" class="close-search"><span class="icon-cross"></span></a>
			<input type="submit" value="ค้นหา" class="w-btn">
		</form>
	</div>

  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery-1.11.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/trmix/dist/trmix.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
