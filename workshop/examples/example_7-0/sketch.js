// Think about our example from last week, moving an ellipse across the screen
// We could do this with two ellipses.
// Imagine doing this with 100 ellipse... it gets messy. BUT we can use arrays!
// Adapted from Getting Started with Processing


var x = [];

function setup() {

  createGraphics(600, 400);
  noStroke();
  fill(255, 152, 0);

  for (var i=0; i<100; i++) {
    x.push(random(0, width));
    //x[i] = random(0, width); // works the same
  }
}

function draw() {

  background(126, 138, 162);

  for (var i=0; i<x.length; i++) {

    x[i] = x[i] + 1;
    if (x[i] > width + 5) {
      x[i] = -5;
    }

    ellipse (x[i], i*5, 10, 10);
  }

}
