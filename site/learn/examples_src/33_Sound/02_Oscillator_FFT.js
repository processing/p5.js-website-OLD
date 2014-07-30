/*
 * @name Oscillator
 * @description Control an Oscillator and view the waveform using FFT
 */
var osc, fft;

function setup() {
  createCanvas(780, 440);
  osc = new Oscillator(220, 'triangle'); // set frequency and type
  osc.amp(.5);
  fft = new FFT();
  osc.start();
}

function draw() {
  background(255);
  waveform = fft.waveform();  // analyze the waveform
  beginShape();
  for (var i = 0; i < waveform.length; i++){
    var x = map(i, 0, waveform.length, 0, width);
    var y = map(waveform[i], 0, 256, -height/2, height/2);
    vertex(x, y + height/2);
  }
  endShape();
}