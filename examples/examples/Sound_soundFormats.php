<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>soundFormats</h2>
          <p><p>Technically, due to patent issues, there is no single
  sound format that is supported by all web browsers. While
  <a href="http://caniuse.com/#feat=mp3">mp3 is supported</a> across the
  latest versions of major browsers on OS X and Windows, for example,
  it may not be available on some less mainstream operating systems and
  browsers.</p>
 *
  <p>To ensure full compatibility, you can include the same sound file
  in multiple formats, e.g. 'sound.mp3' and 'sound.ogg'. (Ogg is an
  open source alternative to mp3.) You can convert audio files
  into web friendly formats for free online at <a href="
  http://media.io/">media.io</a></p>.
 *
  <p>The soundFormats() method tells loadSound which formats
  we have included with our sketch. Then, loadSound will
  attempt to load the first format that is supported by the
  client's web browser.</p>
 *
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
          examples.init('../examples_src/33_Sound/02_soundFormats.js');
      });
    </script>
  </body>
</html>