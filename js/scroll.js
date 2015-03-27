/* 

Hastily written scroll to fixed position:

TO DO:  

    - needs to not fail on resize of resize after scrolling, 
    - and needs to use animate() to add jquery easing  

*/

if (window.matchMedia("(min-width:720px").matches) {
  var elementPosition = $('#menu').offset();
  
  $(window).scroll(function(){
    if($(window).scrollTop() > elementPosition.top){
      var top = Math.round($(window).scrollTop()-elementPosition.top);
      $('#menu').css({'margin-top': top});
    } else {
      $('#menu').css({'margin-top': 0});
    }    
  });
}