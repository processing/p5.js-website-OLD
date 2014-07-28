<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2>Play Mode</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">

var playMode = 'sustain';
var sample;

function setup() {
  createCanvas(710,50);
  sample = loadSound( ['assets/Damscray_-_Dancing_Tiger_02.ogg', 
                       'assets/Damscray_-_Dancing_Tiger_02.mp3'] );
}

function draw() {
  background(255);
  text('Current Play Mode: ' + playMode + '. Press z to change mode,
    and a to trigger sound', 10, height/2);
}

function togglePlayMode(){
  if (playMode == 'sustain'){
    playMode = 'restart';
  }
  else {
    playMode = 'sustain';
  }
  sample.playMode(playMode);
}

function keyPressed(k) {
  if (k.keyCode == 65) {
    sample.play(.6);
  }
  if (k.keyCode == 90) {
    togglePlayMode();
  }
}
</code></pre>
          </div>
          </div>
          </p>
          <p>Press &quot;a&quot; on your keyboard to play a sound file.
 Trigger lots of sounds at once! &quot;z&quot; to change playmode.
 In 'sustain' mode, the sound will overlap with itself.
 In 'restart' mode it will stop and then start again.
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