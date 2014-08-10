/*
 * @name Modifying the DOM
 * @description Create DOM elements and modify their properties every time
 * `draw()` is called.
 */
var 
dancingWords;

function Span(element, x, y) {
  element.position(x, y);
  
  this.brownian = function brownian() {
    x += random(2) > 1 ? random(6) : -random(6);
    y += random(2) > 1 ? random(6) : -random(6);
    element.position(x, y);
  };
};

function setup() {
  // This paragraph is created aside of the main block of code.
  // It's to differentiate the creation of an element from its selection.
  // Selected elements doesn't need to be created by p5js, they can be just 
  //   plain HTML.
  createP ('I learne in this Letter, that Don Peter of Arragon, comes this'
    + ' night to Messina').addClass('text');

  var
  texts,
  text;
  
  dancingWords = [];
  texts = getElements('text');
  for (text of texts) {
    var
    paragraph,
    words,
    word;
    
    paragraph = text.elt.innerHTML;
    words = paragraph.split(" ");
    for (word of words) {   
      var spannedWord = createSpan(word);
      spannedWord.addClass('word');
      dancingWords.push( new Span (spannedWord, random(600), random(200)));
    };   
  };
}

function draw() {
  var word;
  
  for (word of dancingWords) {
    word.brownian();
  };
}
