jQuery(document).ready(function () {
    
    jQuery('ul.nav li a').click(function(e) {
	  var $this = $(this);
	  if (!$this.hasClass('active')) {
		$this.addClass('active');
	  }
	  e.preventDefault();
	});
    var element_position = jQuery('#content').offset().top;
    var y_scroll_pos = window.pageYOffset;
	if(y_scroll_pos > element_position) {
		jQuery('.primaryNavLinks').show();
	}
    jQuery(window).on('scroll', function() {
    	var y_scroll_pos = window.pageYOffset;
    	if(y_scroll_pos > element_position) {
    		jQuery('.primaryNavLinks').show();
    	} else {
    		jQuery('.primaryNavLinks').hide();
    	}
    });
});
