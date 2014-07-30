/*
 * @name Alpha Mask
 * @description Loads a "mask" for an image to specify the transparency in 
 * different parts of the image. The two images are blended together using 
 * the mask() method of p5.Image.
 */
var img;
var imgMask;

function preload() {
  img = loadImage("assets/moonwalk.jpg");
  imgMask = loadImage("assets/mask.png");
}

function setup() {
  createCanvas(780, 440);
  img.mask(imgMask);
  imageMode(CENTER);
}

function draw() {
  background(0, 102, 153);
  image(img, width/2, height/2);
  image(img, mouseX, mouseY);
}