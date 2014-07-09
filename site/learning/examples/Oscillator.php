<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2>Oscillator</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var osc, fft;

function setup() {
  createCanvas(710,400);
  osc = new Oscillator(220, 'triangle'); // set frequency and type
  osc.amp(.5);
  fft = new FFT();
  osc.start();
}

function draw() {
  background(255);
  waveform = fft.waveform();  // analyze the waveform
  beginShape();
  for (var i = 0; i &lt; waveform.length; i++){
    var x = map(i, 0, waveform.length, 0, width);
    var y = map(waveform[i], 0, 256, -height/2, height/2);
    vertex(x, y + height/2);
  }
  endShape();
}</code></pre>
          </div>
          </div>
          </p>
          <p>Control an Oscillator and view the waveform using FFT
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