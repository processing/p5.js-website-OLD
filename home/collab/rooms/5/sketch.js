var myImage
var myImage2
var myImage3
var myImage4

function setup() {
  
  createCanvas(264, 264)
  scale(0.33)
  myImage = loadImage("Garfield_the_Cat.svg.png")
  myImage2 = loadImage("summer_hoverboard_by_ask_debbie_starz-d6vexp0.png")
  myImage3 = loadImage("small-wood-table-hi.png")
  myImage4 = loadImage("cartoon-tv-4.png")
  
}
function draw() {
  background(210,166,139)
  ellipse(150, 150, 150, 150)
  ellipse(150, 250, 150,150)
  ellipse(150,200, 150, 150)
  fill(255, 0, 0)
  rect(400, 200, 250, 500)
  fill(0, 0, 255)
  stroke(0, 0, 0)
  strokeWeight(10)
  rect(400, 200, 200, 500)
  fill(0, 255, 255)
  rect(450,560, 150, 100)
  image(myImage, 450, 350, 150, 150)
  image(myImage2, 150, 550, 200, 100)
  image(myImage3, 300, 150, 100, 100)
  image(myImage4, 300, 60, 100, 100)
} 