/*
 * @name Weather
 * @frame 720,280
 * @description This example grabs JSON weather data from openweathermap.org.
*/

var dir = 0;
var wind;

var position;

function setup() {
  createCanvas(720, 200);
  loadJSON('http://api.openweathermap.org/data/2.5/weather?q=NewYork,USA&units=imperial', gotWeather);
  position = createVector(width/2, height/2);
  wind = createVector();
}

function draw() {
  background(200);

  noStroke();
  
  push();
  translate(32, height - 32);
  rotate(radians(dir));
  fill(255);
  ellipse(0, 0, 48, 48);

  stroke(45, 123, 182);
  strokeWeight(3);
  line(0, -16, 0, 16);

  noStroke();
  fill(45, 123, 182);
  triangle(0, -18, -6, -10, 6, -10);
  pop();

  position.add(wind);
  
  stroke(0);
  fill(51);
  ellipse(position.x, position.y, 16, 16);

}

function gotWeather(weather) {

  dir = Number(weather.wind.deg);
  var windmag = Number(weather.wind.speed);
  var gustmag;
  if (weather.wind.gust)
    gustmag = Number(weather.wind.gust);
  else
    gustmag = windmag;

  // Setup UI

  var temperatureDiv = createDiv(floor(weather.main.temp) + '&deg;');
  var windDiv = createDiv("WIND " + windmag + " <small>MPH</small>");
  var gustDiv = createDiv("GUST " + gustmag + " <small>MPH</small>");

  wind = p5.Vector.fromAngle(radians(dir - 90));
  println();

}