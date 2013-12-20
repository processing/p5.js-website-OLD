
var largeImage;

var preload = function() {
  largeImage = loadImage('http://www.hdwallpapersimages.com/wp-content/uploads/2013/01/Stars-in-Space.jpg'); 
};


var setup = function() {
  createGraphics(1300, 600);
  //largeImage = loadImage('http://www.hdwallpapersimages.com/wp-content/uploads/2013/01/Stars-in-Space.jpg');
  image(largeImage, 0, 0);
};

var draw = function() {
	// do nothing
	console.log(largeImage);
};



