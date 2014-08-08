/*
 * @name Play Mode
 * @description 
 * <p>In 'sustain' mode, the sound will overlap with itself.
 * In 'restart' mode it will stop and then start again.
 * Click mouse to play a sound file.
 * Trigger lots of sounds at once! Press any key to change playmode.</p>
 * <p>You will need to include the 
 * <a href="http://p5js.org/reference/#/libraries/p5.sound">p5.sound library</a>
 * for this example to work in your own project.</p>
 */
var playMode = 'sustain';
var sample;

function setup() {
  createCanvas(710,50);
  soundFormats('mp3', 'ogg');
  sample = loadSound('assets/Damscray_-_Dancing_Tiger_02.mp3');
}

function draw() {
  background(255,255,0);
  var str = 'Click here to play! Current Play Mode: ' + playMode+'.';
  text(str, 10, height/2);
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

