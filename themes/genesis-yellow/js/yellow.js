jQuery(function($){
    $(window).load(function() {
        $('#standard-slider').flexslider({
            animation: "slide"
        });
    });

    $(".site-header").sticky({topSpacing:0});

    $('.navbar-toggle').click(function() {
        $('#menu-main').slideToggle();
    })
});