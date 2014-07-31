/*
 * @name Simple Shapes
 * @description This examples includes a circle, square, triangle, and a flower.
 */

function setup() {
  createCanvas(780, 440);
  background(200);

	fill(204, 101, 192, 127);
	stroke(127, 63, 120);

	rect(40, 120, 120, 40);
	ellipse(240, 240, 80, 80);
	triangle(300, 100, 320, 100, 310, 80);

	translate(580, 200);
	for (var i = 0; i < 10; i ++) {
	  ellipse(0, 30, 20, 80);
	  rotate(PI/5);
	}
}