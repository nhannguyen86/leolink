$(document).ready(function () {
    
    $('ul.nav li a').click(function(e) {
	  var $this = $(this);
	  if (!$this.hasClass('active')) {
		$this.addClass('active');
	  }
	  e.preventDefault();
	});
    var element_position = $('#content').offset().top;
    var y_scroll_pos = window.pageYOffset;
	if(y_scroll_pos > element_position) {
		$('.primaryNavLinks').show();
	}
    $(window).on('scroll', function() {
    	var y_scroll_pos = window.pageYOffset;
    	if(y_scroll_pos > element_position) {
    		$('.primaryNavLinks').show();
    	} else {
    		$('.primaryNavLinks').hide();
    	}
    });
});
