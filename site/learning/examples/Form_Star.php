<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Star</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
function setup() {
  createCanvas(710, 400);
}

function draw() {
  background(102);
  
  push();
  translate(width*0.2, height*0.5);
  rotate(frameCount / 200.0);
  star(0, 0, 5, 70, 3); 
  pop();
  
  push();
  translate(width*0.5, height*0.5);
  rotate(frameCount / 50.0);
  star(0, 0, 80, 100, 40); 
  pop();
  
  push();
  translate(width*0.8, height*0.5);
  rotate(frameCount / -100.0);
  star(0, 0, 30, 70, 5); 
  pop();
}

function star(x, y, radius1, radius2, npoints) {
  var angle = TWO_PI / npoints;
  var halfAngle = angle/2.0;
  beginShape();
  for (var a = 0; a &lt; TWO_PI; a += angle) {
    var sx = x + cos(a) * radius2;
    var sy = y + sin(a) * radius2;
    vertex(sx, sy);
    sx = x + cos(a+halfAngle) * radius1;
    sy = y + sin(a+halfAngle) * radius1;
    vertex(sx, sy);
  }
  endShape(CLOSE);
}</code></pre>
          </div>
          </div>
          </p>
          <p>The star() function created for this example is capable of 
 drawing a wide range of different forms. Try placing different numbers 
 into the star() function calls within draw() to explore.
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