/*
 * @name Video
 * @frame 710,250
 * @description <p>Load a video with multiple formats and toggle between playing
 * and paused with a button press. You will need to include the 
 * <a href="http://p5js.org/reference/#/libraries/p5.dom">p5.dom library</a>
 * for this example to work in your own project.</p>
 */
var playing = false;
var fingers;
var button;


function setup() {
  // specify multiple formats for different browsers
  fingers = createVideo(['assets/fingers.mov', 
                         'assets/fingers.webm']);
  button = createButton('play');
  button.mousePressed(toggleVid); // attach button listener
}

// plays or pauses the video depending on current state
function toggleVid() {
  if (playing) {
    fingers.pause();
    button.html('play');
  } else {
    fingers.loop();
    button.html('pause');
  }
  playing = !playing;
}