<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="learn-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>
      <h2>Tutorials</h2>
      
      <p>These tutorials provide more in-depth or step-by-step overviews of 
      particular topics. Check out the <a href="../examples">examples page</a> 
      to see short demonstrations of various p5.js topics.</p>

      <div class="left-column">
        <a class="nounderline" href="http://hello.p5js.org/">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="http://hello.p5js.org/"><h4>Hello p5.js</h4></a>
        </div>
        <p>This short video will introduce you to the library and what you can do with it.</p> 
      </div>

      <div class="right-column">
        <a class="nounderline" href="../get-started/">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="http://p5js.org/get-started/"><h4>Getting Started</h4></a>
        </div>
        <p>Welcome to p5.js! <br> This introduction covers the basics of setting up a p5.js project.</p> 
      </div>


      <div class="spacer"></div>

      <div class="left-column">
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/p5.js-overview">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/p5.js-overview"><h4>p5.js overview</h4></a>
        </div>
        <p>An overview of the main features of p5.js.</p> 
      </div>
      
      <div class="right-column">
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Processing-transition">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Processing-transition"><h4>p5.js and Processing</h4></a>
        </div>
        <p>The main differences between the two, and how to convert from one to the other.</p> 
      </div>


      <div class="spacer"></div>

      <div class="left-column">
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Beyond-the-canvas">
        <div class="label">
        <img src="../img/learn/dom.jpg"></a>
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Beyond-the-canvas"><h4>Beyond the canvas</h4></a>
        </div>
        <p>Creating and manipulating elements on the page 
        beyond the canvas.</p> 
      </div>

      <div class="right-column">
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Integrating-other-libraries">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Integrating-other-libraries"><h4>Adding libraries</h4></a>
        </div>
        <p>Finding, adding, and integrating other JS libraries.</p> 
      </div>


      <div class="spacer"></div>

      <div class="left-column">
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Local-server">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Local-server"><h4>Using a local server</h4></a>
        </div>
        <p>How to set up a local server on Mac OSX, Windows, or Linux.</p> 
      </div>

      <div class="right-column">
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/p5.js,-node.js,-socket.io">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/p5.js,-node.js,-socket.io"><h4>node.js and socket.io</h4></a>
        </div>
        <p>Using a node.js server with p5.js, communcation via socket.io.</p> 
      </div>

      <div class="spacer"></div>


      <div class="left-column">
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Development">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="https://github.com/processing/p5.js/wiki/Development"><h4>Development</h4></a>
        </div>
        <p>Getting started and overview for contributing to development.</p> 
      </div>

      <div class="spacer"></div>

      <!--<li><a href="https://github.com/processing/p5.js/tree/master/examples/learningprocessing">Learning Processing examples</a> - port of the first 10 chapters of examples from Dan Shiffman's <a href="http://www.learningprocessing.com/examples/">Learning Processing book</a>.</li>

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
