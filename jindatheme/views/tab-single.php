<h3 class="section-header"><i class="ion-compose"></i> Content Settings</h3>

<!-- enable left ads? -->
<div class="form-group">
	<label for="jinda_opt_enable_content_ads_left" class="control-label col-sm-4">
		Enable left banner
		<span class="help-text">(end of post)</span>
	</label>
	<div class="col-sm-8">
		<div class="checkbox">
			<label>
				<input name="jinda_opt_enable_content_ads_left" type="checkbox" value="1" <?php checked('1', get_option('jinda_opt_enable_content_ads_left')) ?>> Enable
			</label>
		</div>
	</div>
</div>

<!-- Ads 1024x150 -->
<div class="form-group">
	<label for="jinda_opt_ads_end_content_right_left" class="control-label col-sm-4">
		Left banner <span class="help-text">(HTML allowed)</span>
	</label>
	<div class="col-sm-8">
		<textarea name="jinda_opt_ads_end_content_left" id="jinda_opt_ads_end_content_left" class="form-control jinda-codemirror" rows="10"><?php echo get_option('jinda_opt_ads_end_content_left'); ?></textarea>
	</div>
</div>

<!-- enable right ads? -->
<div class="form-group">
	<label for="jinda_opt_enable_content_ads_right" class="control-label col-sm-4">
		Enable right banner 
		<span class="help-text">(end of post)</span>
	</label>
	<div class="col-sm-8">
		<div class="checkbox">
			<label>
				<input name="jinda_opt_enable_content_ads_right" type="checkbox" value="1" <?php checked('1', get_option('jinda_opt_enable_content_ads_right')) ?>> Enable
			</label>
		</div>
	</div>
</div>

<!-- Ads 1024x150 -->
<div class="form-group">
	<label for="jinda_opt_ads_end_content_right" class="control-label col-sm-4">
		Right banner <span class="help-text">(HTML allowed)</span>
	</label>
	<div class="col-sm-8">
		<textarea name="jinda_opt_ads_end_content_right" id="jinda_opt_ads_end_content_right" class="form-control jinda-codemirror" rows="10"><?php echo get_option('jinda_opt_ads_end_content_right'); ?></textarea>
	</div>
</div>