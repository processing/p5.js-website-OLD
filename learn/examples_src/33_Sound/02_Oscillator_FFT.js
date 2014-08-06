/*
 * @name Oscillator
 * @description Control an Oscillator and view the waveform using FFT
 */
var osc, fft, soundFile;

function preload() {
  var soundFile = loadSound( ['assets/beatbox.ogg', 
                          'assets/beatbox.wav'] );
}

function setup() {
  createCanvas(720, 400);
  background(0);
  soundFile.play();
  osc = new p5.SinOsc(); // set frequency and type
  osc.amp(.5);
  fft = new p5.FFT();
  osc.start();
}

function draw() {
  background(255,255,0);
  var waveform = fft.waveform();  // analyze the waveform
  beginShape();
  fill(0);
  for (var i = 0; i < waveform.length; i++){
    var x = map(i, 0, waveform.length, 0, width);
    var y = map(waveform[i], 0, 256, height, 0);
    vertex(x, y + height/2);
  }
  endShape();
}