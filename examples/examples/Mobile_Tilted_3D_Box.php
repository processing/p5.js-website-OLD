<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- <div id="popupExampleFrame"></div> -->
    <!-- <iframe id="exampleFrame" src="example.html" ></iframe> -->
    <!-- <iframe id="popupExampleFrame" src="example.html" ></iframe> -->
    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Tilted 3D Box</h2>
          <p>Use mobile to tilt a box
 </p>
          <button id="isMobile-displayButton" class="display_button">display sketch</button>

          <div id="exampleDisplay">
            <iframe id="exampleFrame" src="example.html" ></iframe>
            <p id="notMobile-message">Open this page on a mobile device to display the sketch</p>
            
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
          //examples.init('../examples_src/35_Mobile/04_tilted_3D_box.js');
          var isMobile = window.matchMedia("only screen and (max-width: 480px)");
          $('#exampleFrame').hide();
          // $('#popupExampleFrame').hide();
          if (isMobile.matches) {
          //Conditional script here
            $('#notMobile-message').hide();
            $('#isMobile-displayButton').show();           
          } else {
            $('#notMobile-message').show();
            $('#isMobile-displayButton').hide();
            $('#runButton').hide();
            $('#resetButton').hide();
          }

          // $('#isMobile-displayButton').click( function() { 
          //   $('#exampleFrame').show();
          //   // $('#popupExampleFrame').show();
          //  examples.init('../examples_src/35_Mobile/04_tilted_3D_box.js');
          // });
          examples.init('../examples_src/35_Mobile/04_tilted_3D_box.js');
           
      });


    </script>
  </body>
</html>