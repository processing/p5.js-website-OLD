/*
 * @name Animation
 * @description The circle moves.
 */

var x;
var y;

function setup() {
  createCanvas(780, 440);
  x = 240;
  y = 240;
}

function draw() {
  background(200);
  
  stroke(50);
  fill(100);
  ellipse(x, y, 24, 24);
  
  x = x + random(-1, 1);
  y = y - 1;
  
  if (y < 0) {
    y = 480;
  }
}

