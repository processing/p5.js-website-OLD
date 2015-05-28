/*

Hastily written scroll to fixed position:

TO DO:

    - needs to not fail on resize of resize after scrolling,
    - and needs to use animate() to add jquery easing

*/

// if (window.matchMedia("(min-width:720px").matches) {
//   var elementPosition = $('#menu').offset();
//
//   $(window).scroll(function(){
//     if($(window).scrollTop() > elementPosition.top){
//       var top = Math.round($(window).scrollTop()-elementPosition.top);
//       $('#menu').css({'margin-top': top});
//     } else {
//       $('#menu').css({'margin-top': 0});
//     }
//   });
// }

$(function() {

    var $sidebar   = $("#menu"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 0,



    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        }

        else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }

    });

});
