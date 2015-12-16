<div class="wrap">
	<div class="jinda-opt-wrapper">		
		<div class="container">
			<!-- preload -->
			<div class="preload-block">
				<div class="backdrop"></div>
				<img src="<?php echo THEME_URI ?>/jindatheme/img/preload.gif" alt="">
			</div>
			<div class="row">
				<form method="post" action="options.php" class="form-horizontal" id="jinda-options-form">
					<?php settings_fields('jindaAdmin-general-group'); ?>
					<!-- left -->
					<div class="col-sm-3" id="jinda-opt-leftbar">
						<?php require_once(THEME_DIR.'/jindatheme/views/sidebar-left.php') ?>
					</div>
					<!-- right -->
					<div class="col-sm-9" id="jinda-opt-rightbar">
						<div class="scroll-content">
							<!-- ajax results -->
							<div id="save-result"></div>
							<!-- ajax results -->
							<?php require_once(THEME_DIR.'/jindatheme/views/sidebar-right.php') ?>
							<p class="submit">
								<input type="submit" class="btn" id="jinda-options-submit-button" value="Save Changes">
							</p>
						</div>						
					</div>
				</form>
			</div>
		</div>
		<p class="option-copyrights-text text-center">© 2014, JindaTheme.com - All Rights Reserved.</p>
	</div>
</div>