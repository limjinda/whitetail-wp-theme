		<footer class="footer">
			<div class="container">
				<div class="clearfix mxn2">
					<div class="sm-col sm-col-12 px2 center">
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
							บทความทั้งหมดใน <?php echo get_bloginfo('name'); ?> ถูกเขียนขึ้นโดย <a href="https://plus.google.com/114178088498011147130?rel=author" target="_blank" title="Jirayu Limjinda">Jirayu Limjinda</a> ภายใต้สัญญา <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" title="Creative Commons" target="_blank">CC BY-NC-ND 4.0</a>
						</p>
						<p class="credit-text"><a href="#" target="_blank" title="WhiteTail WordPress Theme">WhiteTail</a> is an opensource WordPress Theme by <a href="http://www.jindatheme.com" target="_blank" title="JindaTheme">JindaTheme</a></p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div id="search-container" class="search-bar">
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<input type="search" placeholder="ฉันกำลังมองหา.." class="search-field w-tb" value="<?php echo get_search_query() ?>" name="s" />
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

  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery-1.11.2.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/trmix/dist/trmix.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/matchHeight/jquery.matchHeight-min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>