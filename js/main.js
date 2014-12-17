$(window).scroll(function() {

    if ($("#main-nav").offset().top > 50) {
        $("#main-nav").addClass("black");
        $("#main-nav").removeClass("white");
        $("#logo-black").css("display", "block");
        $("#logo-white").css("display", "none");
        $("#dropdown").addClass("moveUp");
    } else {
        $("#main-nav").addClass("white");
        $("#main-nav").removeClass("black");
        $("#logo-black").css("display", "none");
        $("#logo-white").css("display", "block");
        $("#dropdown").removeClass("moveUp");
    }

});