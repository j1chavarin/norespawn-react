jQuery(document).ready(function($){
	
	// Nav Add background on Scroll
	$(window).scroll(function() {
		var windscroll = $(window).scrollTop();
		
		if (windscroll >= 61) {
			$('.navbar').removeClass('transparent');
		} else {
			$('.navbar').addClass('transparent');
		}
	
	}).scroll();
	
	// Active Class
	var current = location.pathname;
    
	$('.navbar .nav-link').each(function() {
		var $this = $(this); 
	
		// we check comparison between current page and attribute redirection.
		if ($this.attr('href') === current) {
	   	$this.addClass('active');
	  	}
	});
});	
