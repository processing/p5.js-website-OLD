// The Nature of Code
// Daniel Shiffman
// http://natureofcode.com

// Demonstration of Craig Reynolds' "Flocking" behavior
// See: http://www.red3d.com/cwr/
// Rules: Cohesion, Separation, Alignment

// Click mouse to add boids into the system

var flock;

var text;

function setup() {
  text = createHTML("Drag the mouse to generate new boids.");
  text.position(10,365);

  createCanvas(640,360);
  flock = new Flock();
  // Add an initial set of boids into the system
  for (var i = 0; i < 200; i++) {
    var b = new Boid(width/2,height/2);
    flock.addBoid(b);
  }
}

function draw() {
  background(51);
  flock.run();
  
  text.html(flock.boids.length + " " + Math.floor(frameRate()));
}

// Add a new boid into the System
function mouseDragged() {
  flock.addBoid(new Boid(mouseX,mouseY));
}

// The Nature of Code
// Daniel Shiffman
// http://natureofcode.com

// Flock object
// Does very little, simply manages the array of all the boids

function Flock() {
  // An array for all the boids
  this.boids = []; // Initialize the array
}

Flock.prototype.run = function() {
  for (var i = 0; i < this.boids.length; i++) {
    this.boids[i].run(this.boids);  // Passing the entire list of boids to each boid individually
  }
}

Flock.prototype.addBoid = function(b) {
  this.boids.push(b);
}

