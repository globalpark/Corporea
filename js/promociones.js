$(document).ready(function(){
  promocionesHeight();
});

$(window).resize(function(){
  promocionesHeight();
});

function  promocionesHeight(){

  //Get Window Width
  var windowWidth = $(window).width();

  //Store all elements in array
  var promo = $('.promocion-box');
  var divHeight  = 0;

  if( windowWidth > 992){

    for (var i = 0; i <= promo.length; i++) {
        divHeight = $(promo[i]).height();
        if($(promo[i]).hasClass("banner-footer")){
          $(promo[i]).css("padding-top", 100 - (divHeight/2) + "px");
          $(promo[i]).css("padding-bottom", 100 - (divHeight/2) + "px");
        } else {
          $(promo[i]).css("padding-top", 180 - (divHeight/2) + "px");
          $(promo[i]).css("padding-bottom", 180 - (divHeight/2) + "px");
        }
    }

  }else{

    for (var i = 0; i <= promo.length; i++) {
        divHeight = $(promo[i]).height();
        if($(promo[i]).hasClass("banner-footer")){
          $(promo[i]).css("padding-top", 70 - (divHeight/2) + "px");
          $(promo[i]).css("padding-bottom", 70 - (divHeight/2) + "px");
        } else {
          $(promo[i]).css("padding-top", 120 - (divHeight/2) + "px");
          $(promo[i]).css("padding-bottom", 120 - (divHeight/2) + "px");
        }
    }

  }

}