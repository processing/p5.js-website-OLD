<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Transparency</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var img;
var offset = 0;
var easing = 0.05;

function setup() {
  createCanvas(710, 400);
  img = loadImage(&quot;assets/moonwalk.jpg&quot;);  // Load an image into the program 
}

function draw() { 
  image(img, 0, 0);  // Display at full opacity
  var dx = (mouseX-img.width/2) - offset;
  offset += dx * easing; 
  tint(255, 127);  // Display at half opacity
  image(img, offset, 0);
}</code></pre>
          </div>
          </div>
          </p>
          <p>Move the pointer left and right across the image to change its 
 position. This program overlays one image over another by modifying the 
 alpha value of the image with the tint() function.
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