$(document).ready(function () {
    
    $('ul.nav li a').click(function(e) {
    		alert('ssss');
	  var $this = $(this);
	  if (!$this.hasClass('active')) {
		$this.addClass('active');
	  }
	  e.preventDefault();
	});
});