
var t = 0.0;
var t2 = 0.0;
var t3 = 0.0;
var t4=0.0;
var step = 0.005;
var step2 = 0.0035;
var step3 =0.0077;
var step4 =0.0025;
var position=500; 
//var particles =  new Array(200);
//less particle in order to speed up
var particleloop = new Array(50);

// added variables for easing LM
var x = 0, y = 0, targetX = 0, targetY = 0;
var easingX = 0.03, easingY = 0.02;
 

function setup() {
  var cnv = createCanvas(displayWidth, displayHeight);
  cnv.parent("home-sketch");
  for (var i = 0; i < position; i++) {
    var p = createVector(map(i, 0, p, 0, width * 2),random(0, height));
    //particles[i] = new Particle(p);
    particleloop[i] = new Particleloop(p);
  }
}

function draw() {
  background(255);

  // get adjusted vals based on easing
  targetX = mouseX;
  x += (targetX - x) * easingX;

  targetY = mouseY;
  y += (targetY - y) * easingY;


  //purple
  stroke(112,112,255,90);
  for (var i=0; i < width; i++) {
   
    var mountain = noise((i+t)/1000.0 + 8,0.002*x) *250;
    line(i,height,i,mountain+y);
    t+= step;
}
   
   //pink blue

  stroke(203,243,251);
  for(var i =0;i<width;i++){
    var mountain = noise((i+t3)/500.0, 0.002*x) *450;
    line(i,height,i,y+mountain);
    t3+=step3;
}
   //darker blue

  stroke(0,204,255);
  for(var i=0;i<width;i++){
    var mountain = noise((i+t2)/640.0 + 8, 0.002*x) *450;
    line(i,height,i,mountain+y);
    t2+=step2;
 }
   //pink orange

  stroke(255,102,0);
  for(var i=0;i<width;i++){
    var mountain = noise((i+t4)/760.0 + 8, 0.002*x) *500;
    line(i,height,i,mountain+y);
    t4+=step4;

  }

    //particle

  noStroke();
  for (var i = 0; i < position; i++) {
    fill(226,226,226,random(50,100));
    var thisLevel = map(100, 0, 255, 0, 1);
    // particles[i].update( thisLevel );
    // particles[i].draw();
    // particles[i].checkEdges();
    // particles[i].position.x = map(i, 0, position, 0, width * 2);
    
    particleloop[i].update( thisLevel );
    particleloop[i].draw();
    particleloop[i].checkEdges();
    particleloop[i].position.x = map(i, 0, position, 0, width * 2);    
  }

  

    //white layer: one more layer seems as snow pack, so I removed one particle system.
  stroke(250,250,250);
  for (var i=0; i < width; i++) {
   
    var mountain = noise((i+t)/1000.0 + 8,0.002*x) *700;
    line(i,height,i,mountain+y);
    t+= step;
}

}

// ===============
// Particle class
// ===============

// var Particle = function(position) {
//   this.position = createVector(random(0,width),random(0,height));
//   this.velocity = createVector(random(-1,1),random(-2,2));
//   this.scale = random(0, 0.5);
//   this.speed = createVector(0, 10); 
//   this.acceleration = createVector(0,.2);
// }

// var theyExpand = 1;

 
// Particle.prototype.update = function(someLevel) {
//   this.position.y += this.speed.y / (someLevel*2);
//   if (this.position.y > height) {
//     this.position.y = 0;
//   }
//   this.diameter = map(someLevel, 0, 1, 0, 100) * this.scale * theyExpand;

// }

// Particle.prototype.draw = function() {
//   fill(206,206,206,random(90,100));
//   noStroke();
//   ellipse(
//     this.position.x, this.position.y,
//     this.diameter, this.diameter
//   );
// }

// Particle.prototype.checkEdges = function(){
//   if (this.position.x>width) {
// this.position.x = width;
// this.velocity.x*=-1;
// } else if (this.position.x<0) {
// this.velocity.x*=-1;
// this.position.x=0;
// }
// if (this.position.y >= .98*height) {
// this.velocity.y *= -1;
// this.position.y = .98*height;
// }else if(location.y<3){
//   velocity.y *=-0.01;
//   velocity.x *=0.5;
//   location.y =3;

// }
// }

// ===============
// Particleloop class
// ===============

var Particleloop = function(position) {
  this.position = createVector(random(0,width),random(0,height));
  this.velocity = createVector(random(-1,1),random(-2,2));
  this.scale = random(0, 0.5);
  this.speed = createVector(0, 8);
  this.acceleration = createVector(0,.2);
   
}

var theyExpand = 1;

// use FFT bin level to change speed and diameter
Particleloop.prototype.update = function(someLevel) {
  this.position.y += this.speed.y / (someLevel*2);
  if (this.position.y > height) {
    this.position.y = 0;
     
  }
  this.diameter = map(someLevel, 0, 1, 0, 100) * this.scale * theyExpand;
}
 
Particleloop.prototype.draw = function() {
  ellipse(
    this.position.x, this.position.y,
    this.diameter, this.diameter
  );
}

Particleloop.prototype.checkEdges = function(){
  if (this.position.x>width) {
  this.position.x = width;
  this.velocity.x*=-1;
  } else if (this.position.x<0) {
  this.velocity.x*=-1;
  this.position.x=0;
  }
}




// ================
// Helper Functions
// ================

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
  particleloop = [];
  for (var i = 0; i < position; i++) {
    var p = createVector(map(i, 0, p, 0, width * 2),random(0, height));
    //particles[i] = new Particle(p);
    particleloop[i] = new Particleloop(p);
  }
  background(0);
}