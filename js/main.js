/**
 * WHEN CLICK SEARCH ICON
 */
function getSearchBox() {
	jQuery('#search-icon').hide();
	jQuery('#search-container').css('display', 'inline-block').find('.w-tb').focus();
}

function closeSearch(){
	jQuery('#search-container').find('.w-tb').val('');
	jQuery('#search-container').hide();
	jQuery('#search-icon').show();
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
	jQuery('.site-navigation > ul').append( jQuery('#search-container') );

	/**
	 * NAV MENU - MOBILE HACK
	 * VERSION 1.0
	 */
	
	jQuery('.site-navigation > ul').find('li.menu-item-has-children').on('click', function(e){
		e.preventDefault();
		$(this).find('span').toggleClass('icon-arrow-down').toggleClass('icon-arrow-up');
		$(this).find('ul').first().toggle();
	})

})