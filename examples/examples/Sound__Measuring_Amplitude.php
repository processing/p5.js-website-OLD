<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2> Measuring Amplitude</h2>
          <p><p>Analyze the amplitude of sound with
 p5.Amplitude.</p>
 
  <p><b>Amplitude</b> is the magnitude of vibration. Sound is vibration,
  so its amplitude is is closely related to volume / loudness.</p>
 
 <p>The <code>getLevel()</code> method takes an array
 of amplitude values collected over a small period of time (1024 samples).
 Then it returns the <b>Root Mean Square (RMS)</b> of these values.</p>
 
 <p>The original amplitude values for digital audio are between -1.0 and 1.0.
 But the RMS will always be positive, because it is squared.
 And, rather than use instantanous amplitude readings that are sampled at a rate
 of 44,100 times per second, the RMS is an average over time (1024 samples, in this case),
 which better represents how we hear amplitude.
 </p>
 <p><em><span class="small"> To run this example locally, you will need the
 <a href="http://p5js.org/reference/#/libraries/p5.sound">p5.sound library</a>
 a sound file, and a running <a href="https://github.com/processing/p5.js/wiki/Local-server">local server</a>.</span></em></p>
 </p>

          <div id="exampleDisplay">
            <iframe id="exampleFrame" src="example.html" ></iframe>
            <div class="edit_space">
              <button id="runButton" class="edit_button">run</button>
              <button id="resetButton" class="reset_button">reset</button>
            </div>
            <div id="exampleEditor"></div>
          </div>

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

    <script src="../../js/vendor/ace-nc/ace.js"></script>
    <script src="../../js/examples.js"></script>
    <script>
      $(document).ready( function () {
          examples.init('../examples_src/33_Sound/07_Amplitude_Analysis.js');
      });
    </script>
  </body>
</html>