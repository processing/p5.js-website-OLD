/*
 * @name Instantiation
 * @description Create a p5 instance, which keeps all variables
 * out of the global scope of your page.
 */
var s = function( sketch ) {

  var x = 100; 
  var y = 100;

  sketch.setup = function() {
    sketch.createCanvas(700, 410);
  };

  sketch.draw = function() {
    sketch.background(0);
    sketch.fill(255);
    sketch.rect(x,y,50,50);
  };
};

var myp5 = new p5(s);

// Compare to "global mode"
// var x = 100;
// var y = 100;

// function setup() {
//   createCanvas(200,200);
// }

// function draw() {
//   background(0);
//   fill(255);
//   ellipse(x,y,50,50);
// }