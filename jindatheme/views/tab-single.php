<h3 class="section-header"><i class="ion-compose"></i> Content Settings</h3>

<!-- enable ads? -->
<div class="form-group">
	<label for="jinda_opt_enable_content_ads" class="control-label col-sm-4">Enable ads on single?</label>
	<div class="col-sm-8">
		<div class="checkbox">
			<label>
				<input name="jinda_opt_enable_content_ads" type="checkbox" value="1" <?php checked('1', get_option('jinda_opt_enable_content_ads')) ?>> Enable
			</label>
		</div>
	</div>
</div>

<!-- Ads 435x100 -->
<div class="form-group">
	<label for="jinda_opt_ads_left" class="control-label col-sm-4">Ads on Single(left)</label>
	<div class="col-sm-8">
		<textarea name="jinda_opt_ads_left" id="jinda_opt_ads_left" class="form-control jinda-codemirror" rows="10"><?php echo get_option('jinda_opt_ads_left'); ?></textarea>
	</div>
</div>

<!-- Ads 435x100 -->
<div class="form-group">
	<label for="jinda_opt_ads_right" class="control-label col-sm-4">Ads on Single(right)</label>
	<div class="col-sm-8">
		<textarea name="jinda_opt_ads_right" id="jinda_opt_ads_right" class="form-control jinda-codemirror" rows="10"><?php echo get_option('jinda_opt_ads_right'); ?></textarea>
	</div>
</div>