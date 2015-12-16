/**
 * WHEN CLICK SEARCH ICON
 */
function getSearchBox() {
	jQuery('#search-icon').hide();
	jQuery('#search-container').css('display', 'inline-block').find('.w-tb').focus();
}

function closeSearch() {
	jQuery('#search-container').find('.w-tb').val('');
	jQuery('#search-container').hide();
	jQuery('#search-icon').css('display', 'inline-block');
}

jQuery(document).ready(function() {
	/**
	 * ADD ARROW TO PARENT CATE
	 * VERSION 1.0
	 */
	var list = jQuery('.site-navigation').find('ul').find('li').find('ul');
	list.each(function() {
		var parent = list.parents('li').find('a').first();
		var arrow = ' <span class="icon-arrow-down"></span>';
		parent.html(parent.text() + arrow);
	})

	/**
	 * APPEND SEARCH TO NAV
	 * VERSION 1.0
	 */
	jQuery('.site-navigation > ul').append('<li class="menu-item" id="search-icon"><a href="javascript:getSearchBox()"><span class="icon-search"></span></a></li>');
	jQuery('.site-navigation > ul').append(jQuery('#search-container'));

	/**
	 * NAV MENU - MOBILE HACK
	 * VERSION 1.0
	 */
	if (jQuery(window).width() <= 1024) {
		jQuery('.site-navigation > ul').find('li.menu-item-has-children').on('click', function(e) {
			e.preventDefault();
			jQuery(this).find('span').toggleClass('icon-arrow-down').toggleClass('icon-arrow-up');
			jQuery(this).find('ul').first().toggle();
		})
	} else {
		jQuery('.site-navigation > ul').find('li.menu-item-has-children').first().on('mouseenter', function() {
			jQuery(this).css('zIndex', 2);
			jQuery('.overlay-background').fadeIn(200);
		}).on('mouseleave', function() {
			jQuery(this).css('zIndex', 'initial');
			jQuery('.overlay-background').fadeOut(200);
		})
	}

	/**
	 * ADD MATCHHEIGHT TO GRID VIEW
	 * VERSION 1.0
	 */
	jQuery('.grid-content-block').matchHeight();

	/**
	 * IF HAVE TABLE IN THAT PAGE
	 * VERSION 1.0
	 */
	if (jQuery('table').length > 0) {
		jQuery('table').addClass('table-light');
	};

	/**
	 * ADD HOLDER TO IFRAME, EMBED and object
	 * TO MAKE THAT RESPONSIVE LAYOUT
	 * VERSION 1.0
	 */

	if (jQuery('iframe').length > 0) {
		jQuery('iframe').each(function() {
			jQuery(this).wrap("<div class='responsive-unit'></div>");
		})
	};

	/**
	 * WARP FORM-SUBMIT(IN COMMENT-FORM)
	 * IN CLEARFIX MXN2
	 */

	if (jQuery('.comment-form').length > 0) {
		jQuery('.form-submit').wrap("<div class='clearifx mxn2'></div>");
		jQuery('.form-submit').addClass('px1 comment-submit-block');
	};

})

jQuery(window).load(function() {
	/**
	 * PRELOADING LAYOUT
	 * VERSION 1.0
	 */
	jQuery('.preloader-block').fadeOut();
})