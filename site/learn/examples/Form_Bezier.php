<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Bezier</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
function setup() {
  createCanvas(780, 440);
  stroke(255);
  noFill();
}

function draw() {
  background(0);
  for (var i = 0; i &lt; 200; i += 20) {
    bezier(mouseX-(i/2.0), 40+i, 410, 20, 440, 300, 240-(i/16.0), 300+(i/8.0));
  }
}
</code></pre>
          </div>
          </div>
          </p>
          <p>The first two parameters for the bezier() function specify the 
 first point in the curve and the last two parameters specify the last point. 
 The middle parameters set the control points that define the shape of the 
 curve.
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