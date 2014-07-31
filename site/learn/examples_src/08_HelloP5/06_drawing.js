/*
 * @name Drawing
 * @description A simple drawing program.
 */
var points = [];

function setup() {
  createCanvas(720, 400);
}

function draw() {
  background(200);
  noFill();
  beginShape();
  for (var i = 0; i < points.length; i++) {
    vertex(points[i].x, points[i].y);
    points[i].x += random(-1,1);
    points[i].y += random(-1,1);
  }
  endShape();

  for (var i = 0; i < points.length; i+=4) {
    ellipse(points[i].x, points[i].y, 4, 4);
  }
}

function mouseDragged() {
  points.push(createVector(mouseX,mouseY));
}