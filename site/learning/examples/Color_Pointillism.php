<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2>Pointillism</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var img;
var smallPoint, largePoint;

function setup() {
  createCanvas(710, 400);
  img = loadImage(&quot;assets/moonwalk.jpg&quot;);
  smallPoint = 4;
  largePoint = 40;
  imageMode(CENTER);
  noStroke();
  background(255);
}

function draw() { 
  var pointillize = map(mouseX, 0, width, smallPoint, largePoint);
  var x = floor(random(img.width));
  var y = floor(random(img.height));
  var pix = img.get(x, y);
  fill(pix, 128);
  ellipse(x, y, pointillize, pointillize);
}</code></pre>
          </div>
          </div>
          </p>
          <p>By Dan Shiffman. Mouse horizontal location controls size of 
 dots. Creates a simple pointillist effect using ellipses colored according 
 to pixels in an image.
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