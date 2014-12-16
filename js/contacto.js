$(document).ready( function(){

  if( $(window).width() > 768 )
    $('#contact-info-container').height( $('#contact-form-container').height() );

});

$(window).resize( function(){

  if( $(window).width() > 768 )
    $('#contact-info-container').height( $('#contact-form-container').height() );

});