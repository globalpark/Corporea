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
});

$(window).resize( function(){
    fitElements();
});

function fitElements(){
    windowHeight = $(window).height();
    $('#home-hero').height(windowHeight + "px");

    
}