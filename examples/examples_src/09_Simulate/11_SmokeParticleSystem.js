/*
 * @name SmokeParticles
 * @description a port of Dan Shiffman's SmokeParticleSystem example originally
 * for Processing. Creates smokey particles :p
 */

// texture for the particle
var particle_texture = null;

// variable holding our particle system
var ps = null;

function preload() {
    particle_texture = loadImage("assets/particle_texture.png");
}

function setup() {

    //set the canvas size
    createCanvas(640,360);

    //initialize our particle system
    ps = new ParticleSystem(0,createVector(width / 2, height - 60),particle_texture);
}

function draw() {
    background(0);

    var dx = map(mouseX,0,width,-0.2,0.2);
    var wind = createVector(dx,0);

    ps.applyForce(wind);
    ps.run();
    for (var i = 0; i < 2; i++) {
        ps.addParticle();
    }

    // Draw an arrow representing the wind force
    drawVector(wind, createVector(width/2,50,0),500);
}

function drawVector(v,loc,scale){
    push();
    var arrowsize = 4;
    translate(loc.x,loc.y);
    stroke(255);
    rotate(v.heading());

    var len = v.mag() * scale;
    line(0,0,len,0);
    line(len,0,len-arrowsize,+arrowsize/2);
    line(len,0,len-arrowsize,-arrowsize/2);
    pop();
}
//========= PARTICLE SYSTEM ===========

/**
 * A basic particle system class
 * @param num the number of particles
 * @param v the origin of the particle system
 * @param img_ a texture for each particle in the system
 * @constructor
 */
var ParticleSystem = function(num,v,img_) {

    this.particles = [];
    this.origin = v.copy(); // we make sure to copy the vector value in case we accidentally mutate the original by accident
    this.img = img_
    for(var i = 0; i < num; ++i){
        this.particles.push(new Particle(this.origin,this.img));
    }
};

/**
 * Runs the particle system.
 */
ParticleSystem.prototype.run = function() {

    // cache length into a variable
    // You may see <variable>.length in a for loop, from time to time but
    // we cache it here because otherwise the length is re-calculated for each iteration
    var len = this.particles.length;

    //loop through and run particles
    for (var i = len - 1; i >= 0; i--) {
        var particle = this.particles[i];
        particle.run();

        // if the particle is dead, we remove it.
        // javascript arrays don't have a "remove" function but "splice" works just as well.
        // we feed it an index to start at, then how many numbers from that point to remove.
        if (particle.isDead()) {
            this.particles.splice(i,1);
        }
    }
}

/**
 * Method to add a force vector to all particles currently in the system
 * @param dir a p5.Vector describing the direction of the force.
 */
ParticleSystem.prototype.applyForce = function(dir) {
    var len = this.particles.length;
    for(var i = 0; i < len; ++i){
        this.particles[i].applyForce(dir);
    }
}

/**
 * Adds a new particle to the system at the origin of the system and with
 * the originally set texture.
 */
ParticleSystem.prototype.addParticle = function() {
    this.particles.push(new Particle(this.origin,this.img));
}

//========= PARTICLE  ===========
/**
 *  A simple Particle class, renders the particle as an image
 */
var Particle = function (pos, img_) {
    this.loc = pos.copy();

    var vx = randomGaussian() * 0.3;
    var vy = randomGaussian() * 0.3 - 1.0;

    this.vel = createVector(vx,vy);
    this.acc = createVector();
    this.lifespan = 100.0;
    this.texture = img_;
}

Particle.prototype.run = function() {
    this.update();
    this.render();
}

Particle.prototype.render = function() {
    imageMode(CENTER);
    tint(255,this.lifespan);
    image(this.texture,this.loc.x,this.loc.y);
}

// Method to apply a force vector to the Particle object
Particle.prototype.applyForce = function(f) {
    this.acc.add(f);
}

Particle.prototype.isDead = function () {
    if (this.lifespan <= 0.0) {
        return true;
    } else {
        return false;
    }
}

Particle.prototype.update = function() {
    this.vel.add(this.acc);
    this.loc.add(this.vel);
    this.lifespan -= 2.5;
    this.acc.mult(0);
}
