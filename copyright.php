<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id='copyright-page'>

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class='column-span'>

    <section>
      <p>The <a href='<?php echo getRoot(); ?>reference/'>Reference</a> for the Language and Environment are under a <a href='http://creativecommons.org/'>Creative Commons</a> license which makes it possible to reuse this content for non-commercial purposes if it is credited.</p>

    </section>
    <?php include('../footer.php'); ?>
    <!-- outside of column for footer to go across both -->

    <p class='clearfix'> &nbsp; </p>

    </div><!-- end id="container"  -->

    <object type='image/svg+xml' data='<?php echo getRoot(); ?>img/thick-asterisk-alone.svg' id='asterisk-design-element'>
         *<!-- to do: add fallback image in CSS -->
    </object>

    <?php include('../end.php'); ?>
  </body>
</html>