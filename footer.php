		<footer class="footer">
			<div class="container">
				<div class="clearfix mxn2">
					<div class="sm-col sm-col-12 px2 center">
						<ul class="list-reset social-list">
							<?php if(get_option('jinda_opt_enable_facebook')): ?>
								<li><a href="<?php echo get_option('jinda_opt_facebook_url') ?>" target="_blank" title="My Facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png" class="social-image" alt="Facebook"></a></li>
							<?php endif; ?>
							<?php if(get_option('jinda_opt_enable_twitter')): ?>
								<li><a href="<?php echo get_option('jinda_opt_twitter_url') ?>" target="_blank" title="My Twitter"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" class="social-image" alt="Twitter"></a></li>
							<?php endif; ?>
							<?php if(get_option('jinda_opt_enable_google_plus')): ?>
								<li><a href="<?php echo get_option('jinda_opt_google_plus_url') ?>" target="_blank" title="My Google Plus"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/google_plus.png" class="social-image" alt="Google Plus"></a></li>
							<?php endif; ?>
							<?php if(get_option('jinda_opt_enable_instagram')): ?>
								<li><a href="<?php echo get_option('jinda_opt_instagram_url') ?>" target="_blank" title="My Instagram"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.png" class="social-image" alt="Instagram"></a></li>
							<?php endif; ?>
							<?php if(get_option('jinda_opt_enable_linkedin')): ?>
								<li><a href="<?php echo get_option('jinda_opt_linkedin_url') ?>" target="_blank" title="My Linkedin"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.png" class="social-image" alt="Linkedin"></a></li>
							<?php endif; ?>
							<?php if(get_option('jinda_opt_enable_github')): ?>
								<li><a href="<?php echo get_option('jinda_opt_github_url') ?>" target="_blank" title="My Github"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/github.png" class="social-image" alt="Github"></a></li>
							<?php endif; ?>
							<?php if(get_option('jinda_opt_enable_500px')): ?>
								<li><a href="<?php echo get_option('jinda_opt_500px_url') ?>" target="_blank" title="My 500px"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/500px.png" class="social-image" alt="500px"></a></li>
							<?php endif; ?>
						</ul>
						<?php echo get_option('jinda_opt_company_footer') ?>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div id="search-container" class="search-bar">
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<input type="search" placeholder="ค้นหา.." class="search-field w-tb" value="<?php echo get_search_query() ?>" name="s" />
			<a href="javascript:closeSearch()" class="close-search"><span class="icon-cross"></span></a>
			<input type="submit" value="ค้นหา" class="search-submit w-btn">
		</form>
	</div>

	<div class="preloader-block">
		<div class="preloader-content">
			<img src="<?php echo get_template_directory_uri(); ?>/img/loading.gif" class="preload-icon" alt="loading, please wait.." />
			<p class="preload-text">loading, please wait..</p>
		</div>
	</div>

	<div class="overlay-background"></div>

	<!-- black ribbon for the king -->
	<div class="black-ribbon">
		<img src="<?php echo get_template_directory_uri() ?>/img/black-ribbon.png" alt="Black Ribbon" />
	</div>
	
	<?php wp_footer() ?>
</body>
</html>