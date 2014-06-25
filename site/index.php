<!DOCTYPE html>

  <?php include('header.php'); ?>
  <body id="home-page">

<div id="bg">
<div class="bg_code">
<pre style="display:none"><code class="language-javascript">
var init = false;

function setup() {
  createCanvas(windowWidth, 1.2*windowHeight);
}

function draw() {
  background(255, 50);
  var x = init ? mouseX : -width;
  var y = init ? mouseY : -height;
  translate(x, y);
  stroke(0, 100);
  fill(255, 100);
  strokeWeight(1);

  beginShape();
  var n = random(4, 10);
  var radius = random(10, 120);
  var thetaOffset = random(0, TWO_PI);
  for(var i = 0; i < n; i++) {
    var theta = thetaOffset + map(i, 0, n - 1, 0, TWO_PI);
    vertex(cos(theta) * radius, sin(theta) * radius);
  }
  endShape();
}

function mouseMoved() {
  init = true;
}
</code></pre>  
</div>
</div>

    <?php include('sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="home">
        <h2>Welcome!</h2>
        <p>
        <div class="example">
          <div>
<pre style="display:none"><code class="language-javascript">
var init = false;

function setup() {
  createCanvas(720, 300);
}

function draw() {
  var r = 127*sin(frameCount*0.01)+127;
  background(r, 20, 100, 5);
  var x = init ? mouseX : width / 2;
  var y = init ? mouseY : height / 2;
  translate(x, y);
  fill(map(x, 0, width, 0, 255), 100, 50);
  stroke(255, 100);
  strokeWeight(random(1, 50));

  beginShape();
  var n = random(4, 10);
  var radius = random(10, 120);
  var thetaOffset = random(0, TWO_PI);
  for(var i = 0; i < n; i++) {
    var theta = thetaOffset + map(i, 0, n - 1, 0, TWO_PI);
    vertex(cos(theta) * radius, sin(theta) * radius);
  }
  endShape();
}

function mouseMoved() {
  init = true;
}
</code></pre>  
          </div>
        </div>
        </p>

        <p><a href="#"><strong>> Download p5.js</strong></a></p>
        <p><a href="<?php echo getRoot(); ?>learning/#examples"><strong>> Try examples</strong></a></p>
        <p>p5.js is a JavaScript library that brings the original goals of Processing to the web. It supports canvas drawing, and a lot more.</p>
        <p>p5.js is a JavaScript library that brings the original goals of Processing to the web. It supports canvas drawing, and a lot more.</p>
        <p>p5.js is a JavaScript library that brings the original goals of Processing to the web. It supports canvas drawing, and a lot more.</p>
      </section>

      <?php include('footer.php'); ?>
    </div><!-- end column-span -->

    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    <object type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="asterisk-design-element">
      *<!-- to do: add fallback image in CSS -->
    </object>

    <?php include('end.php'); ?>
  </body>
</html>
