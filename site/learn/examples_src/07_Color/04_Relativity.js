/*
 * @name Create Image
 * @description The createImage() function provides a fresh buffer of pixels to
 * play with. This example creates an image gradient.
 */
var img;  // Declare variable 'img'.

function setup() {
  createCanvas(720, 400); 
  img = createImage(230, 230);
  img.loadPixels();
  for(var i = 0; i < img.pixels.length; i++) {
    var a = map(i, 0, img.pixels.length, 255, 0);
    img.pixels[i] = [0, 153, 204, a]; 
  }
  img.updatePixels();
}

function draw() {
  background(0);
  image(img, 90, 80);
  image(img, mouseX-img.width/2, mouseY-img.height/2);
}