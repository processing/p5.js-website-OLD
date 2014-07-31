/*
 * @name Play Mode
 * @description Press "a" on your keyboard to play a sound file.
 * Trigger lots of sounds at once! "z" to change playmode.
 * In 'sustain' mode, the sound will overlap with itself.
 * In 'restart' mode it will stop and then start again.
 */

var playMode = 'sustain';
var sample;

function setup() {
  createCanvas(720,50);
  sample = loadSound( ['assets/Damscray_-_Dancing_Tiger_02.ogg', 
                       'assets/Damscray_-_Dancing_Tiger_02.mp3'] );
}

function draw() {
  background(255);
  text('Current Play Mode: ' + playMode + '. Press z to change mode,
    and a to trigger sound', 10, height/2);
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

function keyPressed(k) {
  if (k.keyCode == 65) {
    sample.play(.6);
  }
  if (k.keyCode == 90) {
    togglePlayMode();
  }
}
