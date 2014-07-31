/*
 * @name Load/Play Sound
 * @description Load sound during preload(). Play a sound when key is pressed.
 */

var soundFile;  // Declare variable 'soundFile'.

function preload() {
  // create a SoundFile
  soundFile = loadSound( ['assets/beatbox.ogg', 
                          'assets/beatbox.mp3'] );
}

function setup() {
  createCanvas(720, 400);
  background(0);
}

// when a key is pressed...
function keyPressed() {

  // play the sound file
  soundFile.play(1,1);

  // also make the background yellow
  background(255, 255, 0);
}

function keyReleased() {
  // make the background black again when the key is released
  background(0);
}