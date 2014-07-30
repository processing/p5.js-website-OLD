<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Array Objects</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var unit = 40;
var count;
var mods = [];

function setup() {
  createCanvas(780, 395);
  noStroke();
  var wideCount = width / unit;
  var highCount = height / unit;
  count = wideCount * highCount;

  var index = 0;
  for (var y = 0; y &lt; highCount; y++) {
    for (var x = 0; x &lt; wideCount; x++) {
      mods[index++] = new Module(x*unit, y*unit, unit/2, unit/2, random(0.05, 0.8), unit);
    }
  }
}

function draw() {
  background(0);
  for (var i = 0; i &lt; count; i++) {
    mods[i].update();
    mods[i].draw();
  }
}


function Module(_xOff, _yOff, _x, _y, _speed, _unit) {
  this.xOff = _xOff;
  this.yOff = _yOff;
  this.x = _x;
  this.y = _y;
  this.speed = _speed;
  this.unit = _unit;
  this.xDir = 1;
  this.yDir = 1;
}

// Custom method for updating the variables
Module.prototype.update = function() {
  this.x = this.x + (this.speed * this.xDir);
  if (this.x &gt;= this.unit || this.x &lt;= 0) {
    this.xDir *= -1;
    this.x = this.x + (1 * this.xDir);
    this.y = this.y + (1 * this.yDir);
  }
  if (this.y &gt;= this.unit || this.y &lt;= 0) {
    this.yDir *= -1;
    this.y = this.y + (1 * this.this.yDir);
  }
}

// Custom method for drawing the object
Module.prototype.draw = function() {
  fill(255);
  ellipse(this.xOff + this.x, this.yOff + this.y, 6, 6);
}</code></pre>
          </div>
          </div>
          </p>
          <p>Demonstrates the syntax for creating an array of custom objects.
 </p>
          <p><a style="border-bottom:none !important;" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target=_blank><img src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" style="width:88px"/></a></p>
      </section>

      <?php include('../../footer.php'); ?>
    </div><!-- end column-span -->

    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    <object type="image/svg+xml" data="../../img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>


    <?php include('../../end.php'); ?>
  </body>
</html>