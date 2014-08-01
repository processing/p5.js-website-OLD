<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id='other-content-types-page'>

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class='column-span'>

    <section>
      <p>The p5.js code is under a <a href="https://github.com/lmccart/p5.js/blob/master/license.txt">
      GNU General Public License</a>, meaning you may copy, distribute and modify the software as 
      long as you track changes in source files and keep all modifications under the same
      license.</p>
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