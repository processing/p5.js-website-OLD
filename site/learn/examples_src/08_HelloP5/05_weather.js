/*
 * @name Weather
 * @description This example grabs JSON weather data from openweathermap.org.
 */
// We're going to store the temperature
var temperature = 0;
// We're going to store text about the weather
var weather = "";

function setup() {
  // The URL for the JSON data (replace "imperial" with "metric" for celsius)
  var url = "http://api.openweathermap.org/data/2.5/weather?q=New%20York&units=imperial";

  // Load the XML document
  loadJSON(url, loaded);
}

function loaded(data) {
  // Get the temperature
  temperature = data.main.temp;

  // Grab the description, look how we can "chain" calls.
  weather = data.weather[0].description;

    // Display all the stuff we want to display
  createP("City: New York");
  createP("Current temperature: " + temperature);
  createP("Forecast: " + weather);
}
