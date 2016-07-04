 function setup() {
  createCanvas(264, 264)
  scale(0.33)
 }

 function draw() {
   background(0, 70, (random(255)))
   fill(26, 58, 97)
   rect(0, 0, 200, 650)
   frameRate(60)
   fill(0, 30, (random(255)))
   strokeWeight(random(30))
   rect(0, 0, 100, 150)
   frameRate(30)
   fill(0, 100, (random(255)))
   rect(600, 0, 200, 120)
   rect(350, 250, 300, 450)
   fill(26, 58, 97)
 }
