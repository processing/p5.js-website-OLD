/*
 * @name Brightness
 * @description By Dan Shiffman. This program adjusts the brightness of a part 
 * of the image by calculating the distance of each pixel to the mouse.
 */
var img;

function preload() {
  img = loadImage("assets/moonwalk.jpg");
}

function setup() {
  createCanvas(780, 200);
  img.loadPixels();
  loadPixels();
}

function draw() {
  for (var x = 0; x < width; x++) {
    for (var y = 0; y < height; y++ ) {
      // Calculate the 1D location from a 2D grid
      var loc = 4*(x + y*width);
      var r = img.pixels[loc];
      var maxdist = 50;
      var d = dist(x, y, mouseX, mouseY);
      var adjustbrightness = 255*(maxdist-d)/maxdist;
      r += adjustbrightness;
      r = constrain(r, 0, 255);
      pixels[4*(y*width + x)+3] = 255-r;
    }
  }
  updatePixels();
}