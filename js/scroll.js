/*

Hastily written scroll to fixed position:

TO DO:

    - needs to not fail on resize of resize after scrolling,
    - and needs to use animate() to add jquery easing

*/

$(function() {

    var $sidebar   = $("#menu"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 0;

      if (window.matchMedia("(min-width:720px").matches) {
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
        }
});
