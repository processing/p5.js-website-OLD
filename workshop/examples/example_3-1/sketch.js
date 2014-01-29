
function setup() {

	createGraphics(600, 400);
	noStroke();

};

function draw() {
	background(224, 255, 179);
	ellipse(width/2, height/2, 200, 200);

}


function keyPressed() {

	if (key == 'A') {
		fill(0); // Black
	} 
	else if (key == 'B') {
		fill(255); // White
	} 
	else if (key == 'C') {
		fill(126); // Gray
	}

	//print(keyCode);

}

