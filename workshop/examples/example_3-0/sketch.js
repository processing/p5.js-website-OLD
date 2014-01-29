// Move a line while any key is pressed
var x = 20;

function setup() {

	createGraphics(600, 600);
	smooth();
	strokeWeight(8);
	fill(241, 165, 44);
	stroke(255);

}

function draw() {

	background(186, 215, 212);
	if (isKeyPressed() == true) { // If the key is pressed
		x++; // add 1 to x
	}
	rect(x, 240, 120, 120); // draw a rectangle

}

// Compare to if you change to keyPressed()??

// function keyPressed() {
// 	x++;
// }