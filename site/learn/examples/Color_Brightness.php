<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Brightness</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var img;

function preload() {
  img = loadImage(&quot;assets/moonwalk.jpg&quot;);
}

function setup() {
  createCanvas(780, 200);
  img.loadPixels();
  loadPixels();
}

function draw() {
  for (var x = 0; x &lt; width; x++) {
    for (var y = 0; y &lt; height; y++ ) {
      // Calculate the 1D location from a 2D grid
      var loc = 4*(x + y*width);
      var r = img.pixels[loc];
      var maxdist = 50;
      var d = dist(x, y, mouseX, mouseY);
      var adjustbrightness = 255*(maxdist-d)/maxdist;
      r += adjustbrightness;
      r = constrain(r, 0, 255);
      pixels[4*(y*width + x)+3] = 255-r;
    }
  }
  updatePixels();
}</code></pre>
          </div>
          </div>
          </p>
          <p>By Dan Shiffman. This program adjusts the brightness of a part 
 of the image by calculating the distance of each pixel to the mouse.
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