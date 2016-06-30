// Constants
var Y_AXIS = 1, X_AXIS = 0;
var c1, c2;

function setup() {
  createCanvas(800, 800);

  // Define colors
  c2 = color(204, 102, 0);
  c1 = color(0, 102, 255);
  
  c3 = color(255, 200, 125);
  c4 = color(255, 0, 100);
  
  c5 = color(150, 255, 50);
  c6 = color(100, 10, 155);
  
  setGradient(0, 0, width, height, c1, c2, Y_AXIS);
}

function draw() {
  fill(255, 100);
  stroke(255, 100)
  var weight = dist(mouseX, mouseY, pmouseX, pmouseY);
  strokeWeight(weight);
  line(mouseX, mouseY, pmouseX, pmouseY);
}

function mousePressed() {
  // Background
    
  var x = -20;
  var w = 0;
  var h = 0;
  while (x < width) {
    w = random(30, 100);
    h = random(50, 175);
    fill(0);
    stroke(0);
    strokeWeight(1);
    rect(x, height-h-200, w, h);
    x += w;
  }
  
  push();
  translate(0, -100)
  setGradient(width/4, height-height/4, width/2, height/4, c5, c6, X_AXIS);
  stroke(0);
  strokeWeight(5);
  noFill();
  rect(width/4, height-height/4, width/2, height/4);
  setGradient(width/4, height-height/2, width/2, height/4, c3, c4, X_AXIS);
  stroke(0);
  strokeWeight(5);
  noFill();
  rect(width/4, height-height/2, width/2, height/4);
  fill(0);
  strokeWeight(13);
  triangle(width/4, height-height/2, width-width/4, height-height/2, width/2, 250);
  pop();

}

function setGradient(x, y, w, h, c1, c2, axis) {

  noFill();

  if (axis == Y_AXIS) {  // Top to bottom gradient
    for (var i = y; i <= y+h; i++) {
      var inter = map(i, y, y+h, 0, 1);
      var c = lerpColor(c1, c2, inter);
      stroke(c);
      line(x, i, x+w, i);
    }
  }  
  else if (axis == X_AXIS) {  // Left to right gradient
    for (var i = x; i <= x+w; i++) {
      var inter = map(i, x, x+w, 0, 1);
      var c = lerpColor(c1, c2, inter);
      stroke(c);
      line(i, y, i, y+h);
    }
  }
}
