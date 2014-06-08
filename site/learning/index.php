<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="home-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section id="learning">
      <h2>Learning</h2>
      <p>
        <ul>
          <li><a href="https://github.com/lmccart/p5.js/wiki/Getting-Started">Getting started</a> - set up your environment and create your first sketch.</li>
          
          <li><a href="https://github.com/lmccart/p5.js/wiki/Processing-syntax-conversion">Processing syntax conversion</a> - Processing > p5.js and back!</li>
          
          <li><a href="https://github.com/lmccart/p5.js/wiki/DOM-Extensions">Beyond the canvas</a> - creating and manipulating elements on the page beyond the canvas.</li>
          
          <li><a href="https://github.com/lmccart/p5.js/wiki/Integrating-other-libraries">Working with other libraries</a> - finding, adding, and integrating other JS libraries.</li>
          
          <li><a href="https://github.com/lmccart/p5.js/wiki/Local-server">Enabling a local server</a> - some functionality (loading external files, for example) requires the use of a local server for local development. This tutorial includes instructions for setting this up on Mac OSX, Windows, and Linux.</li>

          <li><a href="https://github.com/lmccart/p5.js/wiki/Development">Development</a> - getting started and overview for those that want to contribute to development.</li>

          <li><a href="https://github.com/lmccart/p5.js/tree/master/examples/learningprocessing">Learning Processing examples</a> - port of the first 10 chapters of examples from Dan Shiffman's <a href="http://www.learningprocessing.com/examples/">Learning Processing book</a>.</li>

          <li><a href="http://risd-creative-programming.github.io/fa13-introtocreativeprogramming/examples.html">RISD class examples</a> - examples covering basics of programming with p5.js used in RISD Intro Creative Programming class.</li>
        </ul>
      </p>
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