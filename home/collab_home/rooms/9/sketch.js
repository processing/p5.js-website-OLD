// Constants
var Y_AXIS = 1, X_AXIS = 0;
var c1, c2;

function setup() {
  createCanvas(800, 800);

  // Define colors
  c2 = color(random(255), random(255), random(255));
  c1 = color(random(255), random(255), random(255));

  setGradient(0, 0, width, height, c1, c2, Y_AXIS);

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
