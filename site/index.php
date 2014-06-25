<!DOCTYPE html>

  <?php include('header.php'); ?>
  <body id="home-page">

<div id="bg">
<div class="bg_code">
<pre style="display:none"><code class="language-javascript">//@TODO placeholder sketch
function setup() {
  createCanvas(windowWidth, 1.2*windowHeight);
  noStroke();
}

function draw() {
  var r = 127*sin(frameCount*0.01)+127;
  background(255, 50);
  fill(map(mouseX, 0, width, 0, 255), 100, 50);
  ellipse(mouseX+random(-7, 7), mouseY+random(-7, 7), 80, 80);
}</code></pre>  
</div>
</div>

    <?php include('sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="about">
        <h2>Welcome!</h2>
        <p>
        <div class="example">
          <div>
<pre style="display:none"><code class="language-javascript">//@TODO placeholder sketch
function setup() {
  createCanvas(720, 300);
  background(100, 20, 100);
  noStroke();
}

function draw() {
  var r = 127*sin(frameCount*0.01)+127;
  background(r, 20, 100, 5);
  fill(map(mouseX, 0, width, 0, 255), 100, 50);
  ellipse(mouseX+random(-7, 7), mouseY+random(-7, 7), 80, 80);
}</code></pre>  
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