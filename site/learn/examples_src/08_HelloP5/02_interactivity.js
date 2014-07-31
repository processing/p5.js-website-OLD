/*
 * @name Interactivity
 * @frame 720,420
 * @description The circle changes color when you click on it.
 */
var col;
var slider;

function setup() {
  createCanvas(720, 400);
  col = color(random(255), random(255), random(255));
  slider = createSlider(0, 255, 127);
}

function draw() {
  background(slider.value());
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