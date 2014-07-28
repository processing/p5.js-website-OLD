<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2>Alpha Mask</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var img;
var imgMask;

function preload() {
  img = loadImage(&quot;assets/moonwalk.jpg&quot;);
  imgMask = loadImage(&quot;assets/mask.png&quot;);
}

function setup() {
  createCanvas(710, 400);
  img.mask(imgMask);
  imageMode(CENTER);
}

function draw() {
  background(0, 102, 153);
  image(img, width/2, height/2);
  image(img, mouseX, mouseY);
}</code></pre>
          </div>
          </div>
          </p>
          <p>Loads a &quot;mask&quot; for an image to specify the transparency in 
 different parts of the image. The two images are blended together using 
 the mask() method of p5.Image.
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