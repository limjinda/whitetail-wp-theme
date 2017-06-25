jQuery(document).ready(function() {

	/**
	 * CodeMirror Init
	 */

	if (jQuery('.jinda-codemirror').length > 0) {

		var adsLeft = CodeMirror.fromTextArea(document.getElementById('jinda_opt_ads_left'), {
			mode : "xml",
			htmlMode: true,
			indentUnit: 2,
			tabSize: 2,
			lineWrapping: true,
		});

		adsLeft.on('changes', function(){
			var newValue = adsLeft.getValue();
			jQuery('#jinda_opt_ads_left').empty().html(newValue);
		});

		var adsRight = CodeMirror.fromTextArea(document.getElementById('jinda_opt_ads_right'), {
			mode : "xml",
			htmlMode: true,
			indentUnit: 2,
			tabSize: 2,
			lineWrapping: true,
		});

		adsRight.on('changes', function(){
			var newValue = adsRight.getValue();
			jQuery('#jinda_opt_ads_right').empty().html(newValue);
		});

		var footerCodemirror = CodeMirror.fromTextArea(document.getElementById('jinda_opt_company_footer'), {
			mode : "xml",
			htmlMode: true,
			indentUnit: 2,
			tabSize: 2,
			lineWrapping: true,
		});

		footerCodemirror.on('changes', function(){
			var newValue = footerCodemirror.getValue();
			jQuery('#jinda_opt_company_footer').empty().html(newValue);
		});

		var jsCodemirror = CodeMirror.fromTextArea(document.getElementById('jinda_opt_company_js'), {
			mode : "javascript",
			htmlMode: true,
			indentUnit: 2,
			tabSize: 2,
			theme: 'monokai',
			scrollbarStyle: "null",
			lineWrapping: true,
			lineNumbers: true
		});

		jsCodemirror.on('changes', function(){
			var newValue = jsCodemirror.getValue();
			jQuery('#jinda_opt_company_js').empty().html(newValue);
		});
	}

	// CLICK ON SIDEBAR
	// CHANGE MENU ITEM TO ACTIVE STATE
	jQuery('.jinda-opt-menu-list').find('li').on('click', function(e) {
		e.preventDefault();
		jQuery('.jinda-opt-menu-list').find('li').removeClass('active');
		jQuery(this).addClass('active');
		var activeTab = jQuery(this).find('a').attr('href');
		jQuery('.jinda-section-content').removeClass('active');
		jQuery(activeTab).addClass('active');
		/**
		 * CODEMIRROR REFRESH
		 */
		adsLeft.refresh();
		adsRight.refresh();
		footerCodemirror.refresh();
		jsCodemirror.refresh();
	});

	// CHECKBOX ICHECK
	jQuery('input').iCheck({
		checkboxClass: 'icheckbox_flat-orange',
		radioClass: 'iradio_flat-orange'
	});

	// BANNER UPLOAD
	jQuery('.jinda-file-upload').on('click', function(e) {
		e.preventDefault();
		var banner_id = jQuery(this).data('banner');
		var send_attachment_bkp = wp.media.editor.send.attachment;
		wp.media.editor.send.attachment = function(props, attachment) {
			jQuery('#jinda_banner_' + banner_id + '_image').attr('src', attachment.url);
			jQuery('#jinda_opt_menu' + banner_id + '_image_url').val(attachment.url);
			wp.media.editor.send.attachment = send_attachment_bkp;
		}
		wp.media.editor.open();
		return false;
	});

	// SAVE FORM
	jQuery('#jinda-options-form').submit(function() {
		jQuery("#jinda-opt-rightbar").mCustomScrollbar("scrollTo", 0, {
			scrollInertia: 0,
			timeout: 0
		});
		jQuery('.preload-block').show();
		jQuery('#save-result').empty();
		jQuery(this).ajaxSubmit({
			success: function() {
				jQuery('#save-result').html('<div id="saveMessage" class="alert alert-success alert-dismissible"></div>');
				jQuery('#saveMessage').append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>All changes was <strong>saved</strong>.').show();
				jQuery('.preload-block').hide();
			},
			error: function() {
				jQuery('#save-result').html('<div id="errorMessage" class="alert alert-danger alert-dismissible"></div>');
				jQuery('#errorMessage').append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Error</strong>, somethings went wrong, please try agian or contact an administrator.').show();
				jQuery('.preload-block').hide();
			},
			timeOut: 5000
		});
		return false;
	});
});

jQuery(window).load(function() {
	jQuery("#jinda-opt-rightbar").mCustomScrollbar({
		theme: "dark",
		scrollInertia: 400
	});
});