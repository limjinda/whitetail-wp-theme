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
						<nav class="site-navigation">
							<ul class="list-reset">
								<li><a href="#">Homepage</a></li>
								<li><a href="#">Read Me</a></li>
								<li>
									<a href="#">Categories</a>
									<ul>
										<li><a href="#">Life</a></li>
										<li><a href="#">Recommended</a></li>
										<li><a href="#">Web development</a></li>
										<li><a href="#">Gadgets</a></li>
									</ul>
								</li>
								<li><a href="#">Resume</a></li>
								<li><a href="#">รับเขียนเว็บไซต์</a></li>
								<li><a href="#">Search</a></li>
							</ul>
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
									<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><img src="<?php echo get_thumbnail_url($post->ID, 'full') ?>" alt="<?php echo get_the_title() ?>" title="<?php echo get_the_title(); ?>"></a>
								</figure>
								<h3 class="grid-title"><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title(); ?></a></h3>
								<p class="grid-text"><?php echo get_the_excerpt(); ?></p>
							</div>
						</div>
					<?php endwhile; else: ?>
						<!-- no post found -->
					<?php endif; ?>
				</div>
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

  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery-1.11.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>
