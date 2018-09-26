$(document).ready(function() {

  jQuery('#hideshow').on('click', function(event) {   
    jQuery('#menubar').toggle('show');
     
  });

 //  $('#hideshow').click(function(e) { //button click class name is myDiv
 //  e.stopPropagation();
 // })
 //  jQuery(document).on('click', function(event) {        
 //    jQuery('#menubar').toggle(false);
 //  });
  $("#about-li").click(function (){
    jQuery('#menubar').toggle(false);
    $('html, body').animate({
        scrollTop: $("#about").offset().top +5
    }, 1000);
  });
  $("#family-li").click(function (){
    jQuery('#menubar').toggle(false);
    $('html, body').animate({
        scrollTop: $("#youthfamily").offset().top +5
    }, 1000);
  });
  $("#mission-li").click(function (){
    jQuery('#menubar').toggle(false);
    $('html, body').animate({
        scrollTop: $("#missions").offset().top +5
    }, 1000);
  });
  $("#group-li").click(function (){
    jQuery('#menubar').toggle(false);
    $('html, body').animate({
        scrollTop: $("#groups").offset().top +5
    }, 1000);
  });
  $("#contact-li").click(function (){
    jQuery('#menubar').toggle(false);
    $('html, body').animate({
        scrollTop: $("#contact").offset().top +5
    }, 1000);
  });

var eventFired = 0;

if ($(window).width() < 960) {
    // alert('Less than 960');
    jQuery('#menubar').toggle(false);
}
else {
    // alert('More than 960');
    eventFired = 1;
    jQuery('#menubar').toggle(true);
}

$(window).on('resize', function() {
    if (!eventFired) {
        if ($(window).width() < 960) {
            // alert('Less than 960 resize');

          jQuery('#menubar').toggle(false);
        } else {
          jQuery('#menubar').toggle(true);
          // jQuery('#contentc').css('visibility','visible');
            // alert('More than 960 resize');
        }
    }
});

});