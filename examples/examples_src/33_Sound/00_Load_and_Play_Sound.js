/*
 * @name Load and Play Sound
 * @description Load sound during preload(). Play a sound when canvas is clicked.
 * <br><br><em><span class="small"> You will need to include the 
 * <a href="http://p5js.org/reference/#/libraries/p5.sound">p5.sound library</a>
 * for this example to work in your own project.</span></em>
 */
var song;

function setup() {
  song = loadSound('assets/lucky_dragons_-_power_melody.mp3');
  createCanvas(720, 200);
  background(255,0,0);
}

function mousePressed() {
  if ( song.isPlaying() ) { // .isPlaying() returns a boolean
    song.stop();
    background(255,0,0);
  } else {
    song.play();
    background(0,255,0);
  }
}