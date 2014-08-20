<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Frequency Modulation</h2>
          <p><p>Frequency Modulation involves two oscillators, referred
 to as the carrier and the modulator, where the modulator controls
 the carrier's frequency.</p>
 <p>The carrier oscillates at an audible frequency (i.e. 440 Hz)
 and connected to master output by default. The carrier.amp is
 set to zero because we will have the modulator control its amplitude.</p>
 <p>The modulator is typically set to a frequency that is lower
 than humans can hear (i.e. 1 Hz, or one cycle every second).
 The modulator is disconnected from master output, and is connected
 to the frequency of the carrier, like this: carrier.freq(modulator).</p>
 <p>In this example,</p><p>
 - MouseX controls the amplitude of the modulator from 0 to 1. When the
 modulator's amplitude is set to 0, the amplitude modulation has no effect.</p>
 <p>- MouseY controls the frequency of the modulator from 0 to 20hz.
 Both impact our perception of the Carrier frequency. A subtle amount
 of Amplitude Modulation can simulate effects such as Tremolo.
 Ring Modulation is a type of Amplitude Modulation where the original
 carrier signal is not present.</p>
 <p>- The modulator output, a signal between -1 and 1,
 is scaled to a range between 100 and 300 using .mult() and .add()</p>
 *
 <p><em><span class="small">You will need to include the 
 <a href="http://p5js.org/reference/#/libraries/p5.sound">p5.sound library</a>
 for this example to work in your own project.</em></span></p>
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
          examples.init('../examples_src/33_Sound/21_FreqModulation.js');
      });
    </script>
  </body>
</html>