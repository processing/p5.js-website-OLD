/*
 * @name Pan Sound
 * @description Ball position follows mouse and correlates to panning of sound.
 * Click mouse to play
 */

var ball = {};
var soundFile;
var panning;

function preload() {
  soundFile = loadSound( ['assets/beatbox.ogg', 
                          'assets/beatbox.wav'] );
}

function setup() {
  createCanvas(710, 100);
}

function draw() {
  background(0, 0, 0);
  ball.x = constrain(mouseX, 0, width);
  ellipse(ball.x, height/2, 100, 100)

  // map the ball's x location to a panning degree 
  // (float between -1.0 and 1.0)
  panning = map(ball.x, 0., width,-1.0, 1.0);
}

function mouseClicked(){
  soundFile.pan(panning);
  // play the sound
  soundFile.play();
}