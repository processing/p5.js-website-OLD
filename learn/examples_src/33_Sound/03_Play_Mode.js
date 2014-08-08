/*
 * @name Play Mode
 * @description 
 * In 'sustain' mode, the sound will overlap with itself.
 * In 'restart' mode it will stop and then start again.
 * Click mouse to play a sound file.
 * Trigger lots of sounds at once! Press any key to change playmode.
 */
var playMode = 'sustain';
var sample;

function setup() {
  createCanvas(720,50);
  soundFormats('mp3', 'ogg');
  sample = loadSound('assets/Damscray_-_Dancing_Tiger_02.mp3');
}

function draw() {
  background(255,255,0);
  text('Click here to play! Current Play Mode: ' + playMode+'.', 10, height/2);
}

function mouseClicked() {
  sample.play();
}
function keyPressed(k) {
    togglePlayMode();
}

function togglePlayMode(){
  if (playMode == 'sustain'){
    playMode = 'restart';
  }
  else {
    playMode = 'sustain';
  }
  sample.playMode(playMode);
}

