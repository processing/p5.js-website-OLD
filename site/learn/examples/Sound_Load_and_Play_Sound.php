<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Load and Play Sound</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">

var soundFile;  // Declare variable 'soundFile'.

function preload() {
	// create a SoundFile
  soundFile = loadSound( ['assets/beatbox.ogg', 
  												'assets/beatbox.mp3'] );
}

function setup() {
  createCanvas(780, 440);
  background(0);
}

// when a key is pressed...
function keyPressed() {

  // play the sound file
  soundFile.play(1,1);

  // also make the background yellow
  background(255, 255, 0);
}

function keyReleased() {
  // make the background black again when the key is released
  background(0);
}</code></pre>
          </div>
          </div>
          </p>
          <p>Load sound during preload(). Play a sound when key is pressed.
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