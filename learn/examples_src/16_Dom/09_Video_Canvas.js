/*
 * @name Video Canvas
 * @description <p>Load a video with multiple formats and draw it to the canvas.
 * You will need to include the 
 * <a href="http://p5js.org/reference/#/libraries/p5.dom">p5.dom library</a>
 * for this example to work in your own project.</p>
 */
var fingers;

function setup() {
  createCanvas(710, 400);
  // specify multiple formats for different browsers
  fingers = createVideo(['assets/fingers.mov', 
                         'assets/fingers.webm']);
  fingers.loop(); // set the video to loop and start playing
  fingers.hide(); // by default video shows up in separate dom 
                  // element. hide it and draw it to the canvas 
                  // instead
}

function draw() {
  background(150);
  image(fingers,10,10); // draw the video frame to canvas
  filter('GRAY');
  image(fingers,150,150); // draw a second copy to canvas
}