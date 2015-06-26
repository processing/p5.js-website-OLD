var numBalls = 40;
var spring = 0.05;
var gravity = -0.00005;
var friction = -0.9;
var balls = [];
var colors;

function setup() {
  createCanvas(windowWidth, windowHeight);
  var a = 155;  // change this to lighten
  colors = [
    color(228, 3, 3, a),
    color(255, 140, 0, a),
    color(255, 237, 0, a),
    color(0, 128, 38, a),
    color(0, 77, 255, a),
    color(117, 7, 135, a)
  ];
  for (var i = 0; i < numBalls; i++) {
    balls[i] = new Ball(random(width), (i%6)*height*0.133+height*0.15, 40, i, balls);
  }
  noStroke();
  noFill();
  fill(255, 204);
}

function draw() {
  background(255, 100);
  for (var i = 0; i < balls.length; i++) {
    var ball = balls[i];
    ball.collide();
    ball.move();
    ball.display();  
  }
}

 
function Ball(xin, yin, din, idin, oin) {
  this.x = xin;
  this.y = yin;
  this.diameter = din;
  this.id = idin;
  this.others = oin;
  this.vx = 0;
  this.vy = 0;
  this.rot = 0;
  //this.vrot = random(-0.01, 0.01);

  this.collide = function() {
    for (var i = this.id + 1; i < numBalls; i++) {
      var dx = this.others[i].x - this.x;
      var dy = this.others[i].y - this.y;
      var distance = sqrt(dx*dx + dy*dy);
      var minDist = this.others[i].diameter/2 + this.diameter/2;
      if (distance < minDist) { 
        var angle = atan2(dy, dx);
        var targetX = this.x + cos(angle) * minDist;
        var targetY = this.y + sin(angle) * minDist;
        var ax = (targetX - this.others[i].x) * spring;
        var ay = (targetY - this.others[i].y) * spring + random(-0.03, 0.03);
        this.vx -= ax;
        this.vy -= ay;
        this.others[i].vx += ax;
        this.others[i].vy += ay;
      }
    }   
  }
  
  this.move = function() {
    this.vy += gravity;
    this.x += this.vx;
    this.y += this.vy;
    //this.rot += this.vrot;
    if (this.x + this.diameter/2 > width) {
      this.x = width - this.diameter/2;
      this.vx *= friction; 
    }
    else if (this.x - this.diameter/2 < 0) {
      this.x = this.diameter/2;
      this.vx *= friction;
    }
    if (this.y + this.diameter/2 > height) {
      this.y = height - this.diameter/2;
      this.vy *= friction; 
    } 
    else if (this.y - this.diameter/2 < 0) {
      this.y = this.diameter/2;
      this.vy *= friction;
    }
  }
   
  this.display = function() {
    push();  
    fill(colors[this.id%6]);
    //ellipse(this.x, this.y, this.diameter, this.diameter);
    translate(this.x-50, this.y-this.diameter/2);
    //rotate(this.rot);
    beginShape();
    vertex(50, 15); 
    bezierVertex(50, -5, 90, 5, 50, 40); 
    vertex(50, 15); 
    bezierVertex(50, -5, 10, 5, 50, 40); 
    endShape();
    pop(); 
  }
}