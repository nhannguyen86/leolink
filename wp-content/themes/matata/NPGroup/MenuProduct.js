jQuery(document).ready(function() {
	js_sidebar();
});
function js_sidebar() {
	jQuery(".see-more a").click(function() {
		jQuery(this).parents('.sub-menu-lv-2').find(".more.hidden:lt(5)").show(200, function() {
			jQuery(this).removeClass('hidden');
			if (jQuery(this).parents('.sub-menu-lv-2').find(".more.hidden").length <= 0) {
				jQuery(this).parents('.sub-menu-lv-2').find('.see-more').remove();
			}
		});
		return false;
	});
	jQuery(".sub-menu-lv-3 li.active").parent("ul").removeClass('hidden');
	jQuery("#sidebar a").click(function() {
		if (jQuery(this).attr("href") == "#") {
			jQuery(this).next("ul").toggleClass('hidden');
			return false;
		}
		return true;
	});
	jQuery("#sidebar a").qtip({
		position: {
			my: 'left bottom',
			at: 'right bottom',
			adjust: {
				x: 5,
				y: -5
			}
		},
		style: {
			classes: 'ui-tooltip-shadow ui-tooltip-' + 'bootstrap'
		}
	});
}
function js_sidebar_active() {
	alert('ssss');
}