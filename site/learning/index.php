<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="home-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section id="learning">
      <h2>Learning</h2>


      <h3>Tutorials</h3>
      <div class="left-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="https://github.com/lmccart/p5.js/wiki/Getting-Started">Getting
        started</a><br>Set up your environment and create your first sketch.</p>
      </div>
      <div class="right-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="https://github.com/lmccart/p5.js/wiki/Processing-syntax-conversion">
        Processing syntax conversion</a><br>Processing > p5.js and back!</p> 
      </div>

      <div class="spacer"></div>

      <div class="left-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="https://github.com/lmccart/p5.js/wiki/DOM-Extensions">
        Beyond the canvas</a><br>Creating and manipulating elements on the page 
        beyond the canvas.</p>
      </div>
      <div class="right-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="https://github.com/lmccart/p5.js/wiki/Integrating-other-libraries">
        Working with other libraries</a><br>Finding, adding, and integrating 
        other JS libraries.</p> 
      </div>

      <div class="spacer"></div>

      <div class="left-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="https://github.com/lmccart/p5.js/wiki/Local-server">
        Enabling a local server</a><br>Some functionality (loading external 
        files, for example) requires the use of a local server for local 
        development. This tutorial includes instructions for setting this up on
        Mac OSX, Windows, and Linux.</p> 
      </div>
      <div class="right-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="https://github.com/lmccart/p5.js/wiki/Development">
        Development</a><br>Getting started and overview for those that want to
        contribute to development.</p> 
      </div>

      <div class="spacer"></div>

      <h3>Examples</h3>
          <p>
          
            <strong>Structure</strong><br>            
            
              <a href="examples/Coordinates.php">Coordinates</a><br>
            
              <a href="examples/Width_and_Height.php">Width and Height</a><br>
            
              <a href="examples/Setup_and_Draw.php">Setup and Draw</a><br>
            
              <a href="examples/No_Loop.php">No Loop</a><br>
            
              <a href="examples/Loop.php">Loop</a><br>
            
            <br>
          
            <strong>Form</strong><br>            
            
              <a href="examples/Points_and_Lines.php">Points and Lines</a><br>
            
              <a href="examples/Shape_Primitives.php">Shape Primitives</a><br>
            
              <a href="examples/Pie_Chart.php">Pie Chart</a><br>
            
              <a href="examples/Regular_Polygon.php">Regular Polygon</a><br>
            
              <a href="examples/Star.php">Star</a><br>
            
              <a href="examples/Triangle_Strip.php">Triangle Strip</a><br>
            
            <br>
          
          </p>
          <!--<li><a href="https://github.com/lmccart/p5.js/tree/master/examples/learningprocessing">Learning Processing examples</a> - port of the first 10 chapters of examples from Dan Shiffman's <a href="http://www.learningprocessing.com/examples/">Learning Processing book</a>.</li>

          <li><a href="http://risd-creative-programming.github.io/fa13-introtocreativeprogramming/examples.html">RISD class examples</a> - examples covering basics of programming with p5.js used in RISD Intro Creative Programming class.</li>-->


    </section>
    <?php include('../footer.php'); ?>
    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    </div><!-- end id="container"  -->

    <object type="image/svg+xml" data="<?php echo getRoot(); ?>img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>

    <?php include('../end.php'); ?>
  </body>
</html>