/*
 * @name Background Image
 * @description This example presents the fastest way to load a 
 * background image into Processing. To load an image as the background, 
 * it must be the same width and height as the program.
 */
var bg;
var y = 0;

function setup() {
  // The background image must be the same size as the parameters
  // into the size() method. In this program, the size of the image
  // is 710x400 pixels.
  bg = loadImage("assets/moonwalk.jpg");
  createCanvas(780, 440);
}

function draw() {
  background(bg);
  
  stroke(226, 204, 0);
  line(0, y, width, y);
  
  y++;
  if (y > height) {
    y = 0; 
  }
}