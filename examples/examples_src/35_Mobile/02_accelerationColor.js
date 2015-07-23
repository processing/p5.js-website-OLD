/*
 * @name Acceleration Color
 * @description Use deviceMoved() to detect when the device is rotated. The background RGB color values are mapped to accelerationX, accelerationY, and accelerationZ values.  
 */

var bgColor;

function setup() {
  createCanvas(710, 400);
  bgColor = [
     random(50, 255),
     random(0, 200),
     random(50, 255)
  ]
}

function draw() {
  background(bgColor[0], bgColor[1], bgColor[2]);
}

function deviceMoved() {
    bgColor = [
       map(accelerationX, -90, 90, 100, 175),
       map(accelerationY, -90, 90, 100, 200),
       map(accelerationZ, -90, 90, 100, 200)
    ]    
}

