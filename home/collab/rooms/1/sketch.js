

function setup() {
  createCanvas(800, 800)
  
  
}

function draw() {
  strokeWeight(random(255))
  fill(0, 0, 0)
  fill(random(255), random(255), 0)
  background(random(255), random(255), 0)
  rect(10, 10, 200, 200)
}