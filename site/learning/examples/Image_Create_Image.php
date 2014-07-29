<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Create Image</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var img;  // Declare variable 'img'.

function setup() {
  createCanvas(710, 400); 
  img = createImage(230, 230);
  img.loadPixels();
  for(var x = 0; x &lt; img.width; x++) {
    for(var y = 0; y &lt; img.height; y++) {
      var a = map(y, 0, img.height, 255, 0);
      img.set(x, y, [0, 153, 204, a]); 
    }
  }
  img.updatePixels();
}

function draw() {
  background(0);
  image(img, 90, 80);
  image(img, mouseX-img.width/2, mouseY-img.height/2);
}</code></pre>
          </div>
          </div>
          </p>
          <p>The createImage() function provides a fresh buffer of pixels to
 play with. This example creates an image gradient.
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