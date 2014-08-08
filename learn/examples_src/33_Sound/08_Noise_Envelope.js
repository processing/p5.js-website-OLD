/**
 *  @name Noise Drum Envelope
 *  @description  Control the output level of Noise with an Envelope.
 *  The result sounds like a snare drum.
 *  A p5.Amplitude will get the level of all sound in the sketch, and
 *  we'll use this value to draw a green rectangle that shows the envelope
 *  in action.
 */

var noise, env, analyzer;

function setup() {
  createCanvas(780, 200);
  noise = new p5.Noise(); // other types include 'brown' and 'pink'
  noise.start();

  // multiply noise volume by 0
  // (keep it quiet until we're ready to make noise!)
  noise.amp(0);

  // the Env accepts time / value pairs to
  // create a series of timed fades
  env = new p5.Env(.01, 1, .2, .1);

  // p5.Amplitude will analyze all sound in the sketch
  // unless the setInput() method is used to specify an input.
  analyzer = new p5.Amplitude();
}

function draw() {
  background(0);
  
  // get volume reading from the p5.Amplitude analyzer
  var level = analyzer.getLevel();

  // use level to draw a green rectangle
  var levelHeight = map(level, 0, .4, 0, height);
  fill(100,250,100);
  rect(0, height, width, - levelHeight);
}

function mousePressed() {
  env.play(noise);
}