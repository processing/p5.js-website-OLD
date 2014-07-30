/*
 * @name Pointillism
 * @description By Dan Shiffman. Mouse horizontal location controls size of 
 * dots. Creates a simple pointillist effect using ellipses colored according 
 * to pixels in an image.
 */
var img;
var smallPoint, largePoint;

function setup() {
  createCanvas(780, 440);
  img = loadImage("assets/moonwalk.jpg");
  smallPoint = 4;
  largePoint = 40;
  imageMode(CENTER);
  noStroke();
  background(255);
}

function draw() { 
  var pointillize = map(mouseX, 0, width, smallPoint, largePoint);
  var x = floor(random(img.width));
  var y = floor(random(img.height));
  var pix = img.get(x, y);
  fill(pix, 128);
  ellipse(x, y, pointillize, pointillize);
}