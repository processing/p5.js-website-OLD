/*
* @name Drawing
* @description Generative painting program.
*/
var paths = [];
var painting = false;
var next = 0;
var lastPosition;

function setup() {

  createCanvas(720, 400);

  mousePosition = createVector(0,0);
  lastPosition = createVector(0,0);
};

function draw() {
  background(200);

  if (millis() > next && painting) {

    // Grab mouse position      
    mousePosition.x = mouseX;
    mousePosition.y = mouseY;

    // New particle's force is based on mouse movement
    var force = p5.Vector.sub(mousePosition, lastPosition);
    force.mult(0.05);

    // Add new particle
    paths[paths.length - 1].add(mousePosition, force);
    
    // Schedule next circle
    next = millis() + random(100);

    // Store mouse values
    lastPosition.x = mousePosition.x;
    lastPosition.y = mousePosition.y;
  }

  // Draw all paths
  for( var i = 0; i < paths.length; i++) {
    paths[i].display();
  }
}

function mousePressed() {
  startDrawing();
}

function mouseReleased() {
  stopDrawing();
}

function startDrawing() {
  next = 0;
  painting = true;
  lastPosition.x = mouseX - 10;
  lastPosition.y = mouseY - 10;
  paths.push(new Paths());
}

function stopDrawing() {
  painting = false;
}

// Class to handle paths of circles
function Paths() {
  this.path = [];
  this.hue = random(100);
}

// Make the position a little fuzzy and add a circle
Paths.prototype.add = function(position, force) {
  position.x += random(-5,5);
  position.y += random(-5,5);
  this.path.push(new Circle(position, force, this.hue));
}

// Draw circles or stamp them to the buffer based on age
Paths.prototype.display = function() {

  for (var i = this.path.length - 1; i >= 0; i--) {
    var lastCircle = null;
    if (i < this.path.length) {
      lastCircle = this.path[i+1];
    }

    if (this.path[i].age < 1) {
      this.path.splice(i, 1);
    } else {
      this.path[i].display(lastCircle);
    }
  }

}  

// Class for individual circles on a path
function Circle(position, force, hue) {
  this.position = createVector(position.x, position.y);
  this.velocity = createVector(force.x, force.y);
  this.drag = 0.95;
  this.age = 255;
}

// Draw a circle with size based on current magnitude
// Draw a line to the previous circle
Circle.prototype.display = function(lastCircle) {
  this.position.add(this.velocity);
  stroke(0, this.age);
  fill(0, this.age/2);    
  ellipse(this.position.x,this.position.y, 8, 8);    
  if (lastCircle) {
    line(this.position.x, this.position.y, lastCircle.position.x, lastCircle.position.y);
  }
  this.velocity.mult(this.drag);
  this.age--;
}