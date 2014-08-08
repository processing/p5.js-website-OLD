<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2> Note Envelope</h2>
          <p> <p>An Envelope is a series of fades, defined
  as time / value pairs. In this example, the envelope
  will be used to "play" a note by controlling the output
  amplitude of an oscillator.<br/><br/>
  The p5.Oscillator sends its output through
  an internal Web Audio GainNode (p5.Oscillator.output).
  By default, that node has a constant value of 0.5. It can
  be reset with the osc.amp() method. Or, in this example, an
  Envelope takes control of that node, turning the amplitude
  up and down like a volume knob.</p>
 <p>You will need to include the 
 <a href="http://p5js.org/reference/#/libraries/p5.sound">p5.sound library</a>
 for this example to work in your own project.</p>
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
          examples.init('../examples_src/33_Sound/09_Note_Envelope.js');
      });
    </script>
  </body>
</html>