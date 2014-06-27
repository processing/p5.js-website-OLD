<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="libraries-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>
      <h2>Libraries</h2>

      <a name="included" class="anchor"><h3>Included</h3></a>

      <div class="right-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="#">
        p5.dom</a><br>Description goes here.</p> 
      </div>

      <div class="left-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="<?php echo getRoot(); ?>reference/#libraries/sound">p5.sound</a><br>Description goes here.</p>
      </div>

      <div class="spacer"></div>

      <a name="contributed" class="anchor"><h3>Contributed</h3></a>

      <div class="left-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="#">
        p5.xxx</a><br>Description goes here.</p> 
      </div>
      <div class="right-column">
        <img src="../img/test-image-1.jpg">
        <p><a href="#">
        p5.xxx</a><br>Description goes here.</p> 
      </div>

      <div class="spacer"></div>



      <a name="contributed" class="anchor"><h3>Create Your Own</h3></a>

      <p>Some info about how to do this.</p>

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