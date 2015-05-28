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


$('.info').css('display', 'none');


var expanded = false;

function show() {
  $(tag).css('display', 'block');
  expanded = true;
}

function hide() {
  $(tag).css('display', 'none');
  expanded = false;
}

var currentId;
var tag;

$('.start-element').click(function () {
  
  var currentId = $(this).attr('id').toString();
  tag = '.info#' + currentId;

  console.log('.info#' + currentId);

  if (expanded) {
    hide();
  }
  else {
    show();
  }
});