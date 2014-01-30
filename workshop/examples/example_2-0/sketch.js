
// Check if mouse is pressed

function setup() {

    createGraphics(600, 600);
    noStroke();
    fill(0);
  
}


function draw() {

    background(238, 49, 157);

    if (isMousePressed() == true) {
        fill(255); // White
    } else {
        fill(0); // Black
    }

    rect(150, 150, 300, 300);
}