function Module(_xOff, _yOff, _x, _y, _speed, _unit) {
  this.xOff = _xOff;
  this.yOffset = _yOff;
  this.x = _x;
  this.y = _y;
  this.speed = _speed;
  this.unit = _unit;
}

  // Custom method for updating the variables
Module.prototype.update = function() {
  this.x = this.x + (this.speed * this.xDirection);
  if (x >= unit || x <= 0) {
    xDirection *= -1;
    x = x + (1 * xDirection);
    y = y + (1 * yDirection);
  }
  if (y >= unit || y <= 0) {
    yDirection *= -1;
    y = y + (1 * yDirection);
  }
}
  
  // Custom method for drawing the object
  void draw() {
    fill(255);
    ellipse(xOffset + x, yOffset + y, 6, 6);
  }
}