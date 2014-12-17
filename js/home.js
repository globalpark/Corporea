$(document).ready( function(){
    fitElements();
    centerTagLine();

    $('#home-slider').owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        autoPlay: true,
        pagination: true
    });
});

$(window).resize( function(){
    fitElements();
    centerTagLine();
});

function fitElements(){
    windowHeight = $(window).height();
    $('#home-slider .item').height(windowHeight-90 + "px");  
}

function centerTagLine(){
    arr = $('.slide-text');
    containerHeight = $('#home-slider .item').height();

    for (var i = 0; i <= arr.length; i++) {
        elemHeight = $(arr[i]).height();

        $(arr[i]).css("margin-top", containerHeight*.3 + "px");
    };
}