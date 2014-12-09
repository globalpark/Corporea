$(window).scroll(function() {

    if ($("#main-nav").offset().top > 50) {
        $("#main-nav").addClass("black");
        $("#main-nav").removeClass("white");
        $("#logo-black").css("display", "block");
        $("#logo-white").css("display", "none");
    } else {
        $("#main-nav").addClass("white");
        $("#main-nav").removeClass("black");
        $("#logo-black").css("display", "none");
        $("#logo-white").css("display", "block");
    }

});

$(document).ready( function(){
    fitElements();

    //Start Slideshow
    if( $("#home-hero") != undefined){
        $("#home-hero").backstretch([
            "../wp-content/themes/Corporea/img/home/homepage1.jpg",
            "../wp-content/themes/Corporea/img/home/homepage2.jpg",
            "../wp-content/themes/Corporea/img/home/homepage3.jpg",
            "../wp-content/themes/Corporea/img/home/homepage6.jpg"
        ], {duration: 3500, fade: 750} );
    }
});

$(window).resize( function(){
    fitElements();
});

function fitElements(){
    windowHeight = $(window).height();
    $('#home-hero').height(windowHeight-90 + "px");
    
}