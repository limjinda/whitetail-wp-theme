<h3 class="section-header"><i class="ion-home"></i> General Settings</h3>

<!-- Description -->
<div class="form-group">
	<label for="jinda_opt_site_description" class="control-label col-sm-4">Site Description</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" name="jinda_opt_site_description" id="jinda_opt_site_description" value="<?php echo get_option('jinda_opt_site_description', 'กรุณาตั้งค่ารายละเอียด (description) เพื่อผลลัพธ์ที่ดีในด้าน SEO') ?>">
	</div>
</div>

<!-- Keywords -->
<div class="form-group">
	<label for="jinda_opt_site_keywords" class="control-label col-sm-4">Site Keywords</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" name="jinda_opt_site_keywords" id="jinda_opt_site_keywords" value="<?php echo get_option('jinda_opt_site_keywords', 'กรุณาตั้งค่าคำค้น (keywords) เพื่อผลลัพธ์ที่ดีในด้าน SEO') ?>">
	</div>
</div>

<!-- Keywords -->
<div class="form-group">
	<label for="jinda_opt_site_og_image" class="control-label col-sm-4">[OG]Image URL</label>
	<div class="col-sm-8">
		<input type="text" class="form-control" name="jinda_opt_site_og_image" id="jinda_opt_site_og_image" value="<?php echo get_option('jinda_opt_site_og_image', '') ?>">
	</div>
</div>

<!-- Footer Text -->
<div class="form-group">
	<label for="jinda_opt_company_footer" class="control-label col-sm-4">Footer Copyrights</label>
	<div class="col-sm-8">
		<textarea name="jinda_opt_company_footer" id="jinda_opt_company_footer" class="form-control jinda-codemirror" rows="10"><?php echo get_option('jinda_opt_company_footer', '<p class="credit-text"><a href="https://github.com/JindaTheme/WhiteTail" target="_blank" title="WhiteTail WordPress Theme">WhiteTail</a> is an opensource WordPress Theme by <a href="http://www.jindatheme.com" target="_blank" title="JindaTheme">JindaTheme</a></p>'); ?></textarea>
	</div>
</div>

<!-- Javascript -->
<div class="form-group">
	<label for="jinda_opt_company_js" class="control-label col-sm-4">Custom Javascript</label>
	<div class="col-sm-8">
		<textarea name="jinda_opt_company_js" id="jinda_opt_company_js" class="form-control jinda-codemirror" rows="10"><?php echo get_option('jinda_opt_company_js'); ?></textarea>
	</div>
</div>