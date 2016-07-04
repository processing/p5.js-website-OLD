var myImage
var myImage2

function setup(){
createCanvas(800, 800)
frameRate(5)
myImage = loadImage("monitor.png")
myImage2 = loadImage("chair.jpg")
}

function draw(){
background(150, 150, 150)

fill(random(255), random(255), random(255))
strokeWeight(1)
ellipse(random(400), random(400), 150, 150)

fill(random(255), random(255), random(255))
strokeWeight(1)
ellipse(random(200), random(200), 150, 150)

fill(random(255), random(255), random(255))
strokeWeight(1)
ellipse(random(400), random(400), 150, 150)


fill(255, 0, 0)
stroke(0, 0, 0)
strokeWeight(10)
rect(500, 200, 250, 500)

fill(0, 250, 0)
rect(550, 560, 150, 100)

fill(0, 250, 0)
rect(50, 250, 100, 400)

fill(0, 250, 0)
rect(150, 550, 300, 100)  

fill(0, 0, 225)
rect(500, 75, 250, 500)

image(myImage, -30, 230, 200, 200)
image(myImage2, 200, 450, 100, 100)
}
  