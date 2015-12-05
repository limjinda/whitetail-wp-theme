jQuery(document).ready(function() {
	var list = jQuery('.site-navigation ul').find('li').find('ul');
	list.each(function(){
		var parent = list.parents('li').find('a').first();
		var arrow = ' <span class="icon-arrow-down"></span>';
		parent.html(parent.text() + arrow);
	})
})