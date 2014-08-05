/*
 * @name Interactivity 2
 * @frame 720,425
 * @description The circle changes color when you move the slider.
 */

var slider;

function setup() {
  createCanvas(720, 400);
  colorMode(HSB, 255);
  slider = createSlider(0, 255, 127);
}

function draw() {
  background(127);
  strokeWeight(2);
  stroke(slider.value(), 255, 255);
  fill(slider.value(), 255, 255, 127);
  ellipse(360, 200, 200, 200);
}