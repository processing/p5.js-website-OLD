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

// $('.info').css('display', 'none');

// var currentId;
// var tag;

//
// var canvas;
// function setup() {
//   // We are still calling createCanvas like in the past, but now
//   // we are storing the result as a variable. This way we can
//   // call methods of the element, to set the position for instance.
//   canvas = createCanvas(300, 250);
//   canvas.class('contribute-item-background');
//   // Here we call methods of each element to set the position
//   // and id, try changing these values.
//   // Use the inspector to look at the HTML generated from this
//   // code when you load the sketch in your browser.
//   canvas.parent('contribute-item');
// }
//
// function draw() {
//   // These commands are applied to the graphics canvas as normal.
//   background(220, 180, 200);
//   ellipse(width/2, height/2, 100, 100);
//   ellipse(width/4, height/2, 50, 50);
// }

// $('.start-element').click(function() {

//   var currentId = $(this).attr('id').toString();
//   tag = '.info#' + currentId;

//   if ($(tag).css('display') =='block') {
//     $(tag).css('display', 'none');
//   }
//   else {
//     $(tag).css('display', 'block');
//   }
// });
