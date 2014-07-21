/* 

Hastily written scroll to fixed position:

TO DO:  

    - needs to not fail on resize of resize after scrolling, 
    - and needs to use animate() to add jquery easing  

*/

var elementPosition = $('#menu').offset();

$(window).scroll(function(){
  if($(window).scrollTop() > elementPosition.top){
    var top = Math.round($(window).scrollTop()-elementPosition.top);
    $('#menu').css({'margin-top': top});
  } else {
    $('#menu').css({'margin-top': 0});
  }    
});


$('#family form').hover(
  function() {
    $('#search_field').css('visibility', 'visible');
    $('#search_field').animate({width: '9.75em'}, 100);
  },
  function() {
    if ($('#search_field').val() === '') {
      closeSearch();
    }
  }
);

$('#family form').focusout(function() {
  closeSearch();
});

function closeSearch() {

  $('#search_field').css('width', '0em');
  $('#search_field').css('visibility', 'hidden');
  console.log($('#search_field').attr('width'));
}