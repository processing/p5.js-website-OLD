// make the s  variable 
var s ;
 // make g variable
var g ;

function setup() {
  createCanvas(1000, 1000)
  //load the s
s = loadImage ( "sphere.png")
//load the g
g = loadImage ( "glow3.png ")

 
}


function draw(){ 

  background(255)
  // draw the s
  image(s, 5, 100 ) 
  stroke(10, 10 ,10 )
  strokeWeight(10)
  ellipse(480,500,600,100)


}
//draw the g 



  



