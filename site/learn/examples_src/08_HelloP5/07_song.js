/*
 * @name Song
 * @description Play a song.
 */

var triOsc;
var env;
var trigger = 0;

var index = 0;
var song = [ 
  { note: 62, duration: 400, display: "D" },  
  { note: 55, duration: 200, display: "G" },  
  { note: 57, duration: 200, display: "A" },  
  { note: 59, duration: 200, display: "B" }, 
  { note: 60, duration: 200, display: "C" },  
  { note: 62, duration: 400, display: "D" },  
  { note: 55, duration: 400, display: "G" },  
  { note: 55, duration: 400, display: "G" }
];

// Envelope
var attackTime = 0.1;
var attackLevel = 0.7;
var decayTime = 03;
var sustainTime = 0.1;
var sustainLevel = 0.2;
var releaseTime = 0.5;

function setup() {
  trigger = millis();
  triOsc = new TriOsc();
  triOsc.amp(0);
  triOsc.start();
  env = new Env(attackTime, attackLevel, decayTime, sustainLevel, sustainTime, releaseTime);
}

function draw() {

  if ((millis() > trigger && index < song.length)){

    var note = song[index].note;
    var duration = song[index].duration;

    var noteDiv = createSpan(song[index].display + "  ");
    noteDiv.mousePressed(function() {
      triOsc.freq(midiToFreq(note));
      env.play(triOsc);
    });
    
    triOsc.freq(midiToFreq(note));
    env.attackTime = 0.1 * (duration / 1000.0);
    env.decayTime = 0.3 * (duration / 1000.0);
    env.sustainTime = 0.1 * (duration / 1000.0);
    env.releaseTime = 0.5 * (duration / 1000.0);
    env.play(triOsc);

    trigger = millis() + duration;
    index ++;
  }    

}

