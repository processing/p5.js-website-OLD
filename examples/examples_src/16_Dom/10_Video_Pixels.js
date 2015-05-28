/*
 * @name Video Pixels
 * @frame 320,240
 * @description <p>Load a video, manipulate it's pixels and draw to canvas. 
 * You will need to include the 
 * <a href="http://p5js.org/reference/#/libraries/p5.dom">p5.dom library</a>
 * for this example to work in your own project.</p>
 */
var fingers;

function setup() {
  createCanvas(320, 240);
  // specify multiple formats for different browsers
  fingers = createVideo(['assets/fingers.mov', 
                         'assets/fingers.webm']);
  fingers.loop();
  fingers.hide();
  noStroke();
  fill(0);
}

function draw() {
  background(255);
  fingers.loadPixels();
  var stepSize = round(constrain(mouseX / 8, 6, 32));
  for (var y=0; y<height; y+=stepSize) {
    for (var x=0; x<width; x+=stepSize) {
      var i = y * width + x;
      var darkness = (255 - fingers.pixels[i*4]) / 255;
      var radius = stepSize * darkness;
      ellipse(x, y, radius, radius);
    }
  }
}