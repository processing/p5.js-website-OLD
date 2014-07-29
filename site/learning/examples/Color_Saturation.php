<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Saturation</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var barWidth = 20;
var lastBar = -1;

function setup() {
  createCanvas(710, 400);
  colorMode(HSB, width, height, 100); 
  noStroke();
}

function draw() {
  var whichBar = mouseX / barWidth;
  if (whichBar != lastBar) {
    var barX = whichBar * barWidth;
    fill(barX, mouseY, 66);
    rect(barX, 0, barWidth, height);
    lastBar = whichBar;
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>Saturation is the strength or purity of the color and 
 represents the amount of gray in proportion to the hue. A &quot;saturated&quot; 
 color is pure and an &quot;unsaturated&quot; color has a large percentage of gray. 
 Move the cursor vertically over each bar to alter its saturation.
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