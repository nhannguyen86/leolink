jQuery(document).ready(function () {
    
    jQuery('ul.nav li a').click(function(e) {
	  var $this = $(this);
	  if (!$this.hasClass('active')) {
		$this.addClass('active');
	  }
	  e.preventDefault();
	});
    (function() {
    	var element_position = jQuery('#content').offset().top;
    	var check = function() {
    		var y_scroll_pos = window.pageYOffset;
    		if(y_scroll_pos > element_position) {
    			jQuery('.primaryNavLinks').show();
    		} else {
    			jQuery('.primaryNavLinks').hide();
    		}
    	};
    	check();
    	jQuery(window).on('scroll', function() {
    		check();
    	});
    })();
});
