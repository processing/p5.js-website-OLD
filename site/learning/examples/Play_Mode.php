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
var sample1, sample2, button;

function setup() {
  createCanvas(0,0);
  sample1 = loadSound( ['assets/Damscray_-_Dancing_Tiger_01.ogg', 'assets/Damscray_-_Dancing_Tiger_01.mp3'] );
  sample2 = loadSound( ['assets/Damscray_-_Dancing_Tiger_02.ogg', 'assets/Damscray_-_Dancing_Tiger_02.mp3'] );

  createP('Press &quot;a&quot; and &quot;s&quot; on your keyboard to play two different samples.&lt;br&gt; Trigger lots of sounds at once! Change mode to hear the difference');

  button = createButton('Current Play Mode: ');
}

function draw() {
  button.html('Current Play Mode: ' + playMode);
}

// alternate between 'sustain' and 'restart', and set playMode of both samples
function togglePlayMode(){
  if (playMode == 'sustain'){
    playMode = 'restart';
  }
  else {
    playMode = 'sustain';
  }
  sample1.playMode(playMode);
  sample2.playMode(playMode);
}

function keyPressed(k) {
  if (k.keyCode == 65) {
    sample1.play(.6);

    // Get even more monophonic by only letting one sample play at a time
    if ( playMode =='restart' &amp;&amp; sample2.isPlaying() ){
      sample2.stopAll();
    }
  }
  if (k.keyCode == 83) {
    if ( playMode =='restart' &amp;&amp; sample1.isPlaying() ){
      sample1.stopAll();
    }
    sample2.play(.6);
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>Change the Play Mode with a button
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