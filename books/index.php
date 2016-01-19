<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="libraries-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>

      <h2>Books</h2>
      <br>
      <div class="narrow-left-column">
        <img src="../img/books/gettingstarted.png"></a>
      </div>

      <div class="wide-right-column book">
        <p><b>Getting Started with p5.js</b><br>
        Lauren McCarthy, Casey Reas, and Ben Fry.<br>
        Published October 2015, Maker Media. 246 pages. Paperback.<br>
        <a href="http://shop.oreilly.com/product/0636920032076.do" target="_blank">Order Print/Ebook from O'Reilly</a><br>
        <a href="http://www.amazon.com/Make-Interactive-Graphics-JavaScript-Processing/dp/1457186772" target="_blank">Order from Amazon</a>
        </p> 
        <p>Written by the lead p5.js developer and the founders of Processing, this book provides an introduction to the creative possibilities of today's Web, using JavaScript and HTML.
        With Getting Started with p5.js, you will:
        <br><br>
        Quickly learn programming basics, from variables to objects.<br>
        Understand the fundamentals of computer graphics.<br>
        Create interactive graphics with easy-to-follow projects.<br>
        Learn to apply data visualization techniques.<br>
        Capture and manipulate webcam audio and video feeds in the browser.</p>

      </div>
      <br>
      <p>
      
      </p>

    </section>

    <p class="clearfix"> &nbsp; </p>

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
