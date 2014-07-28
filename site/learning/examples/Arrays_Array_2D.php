<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2>Array 2D</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var distances = [];
var maxDistance;
var spacer;

function setup() {
  createCanvas(710, 360);
  maxDistance = dist(width/2, height/2, width, height);
  for (var x = 0; x &lt; width; x++) {
    distances[x] = []; // create nested array
    for (var y = 0; y &lt; height; y++) {
      var distance = dist(width/2, height/2, x, y);
      distances[x][y] = distance/maxDistance * 255;
    }
  }
  spacer = 10;
  noLoop();  // Run once and stop
}

function draw() {
  background(0);
  // This embedded loop skips over values in the arrays based on
  // the spacer variable, so there are more values in the array
  // than are drawn here. Change the value of the spacer variable
  // to change the density of the points
  for (var x = 0; x &lt; width; x += spacer) {
    for (var y = 0; y &lt; height; y += spacer) {
      stroke(distances[x][y]);
      point(x + spacer/2, y + spacer/2);
    }
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>Demonstrates the syntax for creating a two-dimensional (2D)
 array. Values in a 2D array are accessed through two index values.  
 2D arrays are useful for storing images. In this example, each dot 
 is colored in relation to its distance from the center of the image. 
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