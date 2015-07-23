/*
 * @name Simple Draw
 * @description Touch to draw on the screen using touchX, touchY, ptouchX, and ptouchY values. 
 */

 function setup() {
 	createCanvas(710, 400);
	strokeWeight(10)
	stroke(0);
}

function touchMoved() {
	line(touchX, touchY, ptouchX, ptouchY);
	return false;
}