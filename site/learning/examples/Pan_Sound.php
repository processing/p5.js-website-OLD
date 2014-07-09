<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2>Pan Sound</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">

var ball = {};
var soundFile;
var panning;

function preload() {
  soundFile = loadSound( ['assets/beatbox.ogg', 
                          'assets/beatbox.wav'] );
}

function setup() {
  createCanvas(710, 100);
}

function draw() {
  background(0, 0, 0);
  ball.x = constrain(mouseX, 0, width);
  ellipse(ball.x, height/2, 100, 100)

  // map the ball's x location to a panning degree 
  // (float between -1.0 and 1.0)
  panning = map(ball.x, 0., width,-1.0, 1.0);
}

function mouseClicked(){
  soundFile.pan(panning);
  // play the sound
  soundFile.play();
}</code></pre>
          </div>
          </div>
          </p>
          <p>Ball position follows mouse and correlates to panning of sound.
 Click mouse to play
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