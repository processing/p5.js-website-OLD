/*
 * @name Interactivity
 * @description The circle changes color when you click on it.
 */

var col;

function setup() {
  createCanvas(780, 440);
  col = color(random(255), random(255), random(255));
}

function draw() {
  background(200);
  stroke(51);
  fill(col);
  ellipse(240,240,200,200);
}

function mousePressed() {
  var d = dist(mouseX, mouseY, 240, 240);
  if (d < 100) {
    col = color(random(255), random(255), random(255));
  }
}