var myGraphics;
var myImg;

function setup() {

	myImg = createHTMLImage("http://th07.deviantart.net/fs70/PRE/i/2011/260/3/5/dash_hooray_by_rainbowcrab-d49xk0d.png");
	myImg.position(290, 50);
  	myImg.size(200, AUTO);
  	myImg.mousePressed(imgHide);

	myGraphics = createGraphics(200, 200);
	myGraphics.position(100, 100);
	myGraphics.mousePressed(imgShow);

}

function draw() {

	background(0);
	fill(255);
	rect(50, 50, 50, 50);
}

function imgHide() {
	myImg.hide();
}

function imgShow() {
	myImg.show();
}