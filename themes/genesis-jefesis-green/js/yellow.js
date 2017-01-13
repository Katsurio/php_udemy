jQuery(function($){
    $(window).load(function() {
		$('#standard-slider').flexslider({
    		animation: "slide"
  		});
  	});

  	$(".site-header").sticky({topSpacing:0});
});