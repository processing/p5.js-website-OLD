<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="download-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="about">
        <h2>Download</h2>
        <a href="#"><h3>> Download p5.js</h3></a>
        <p>Includes <code>p5.js</code>, <a href="../reference/#/libraries/dom"><code>p5.dom.js</code></a>, 
        <a href="../reference/#/libraries/sound"><code>p5.sound.js</code></a>, and an empty example.
        <br>Version 0.2.20 (July 1, 2014)</p>
        <a href="#" class="anchor"><h3>Single Files</h3></a>
        <ul>
          <li><a href="#">Download p5.js</a> - Full, uncompressed version.</li>
          <li><a href="#">Download p5.min.js</a> - Compressed version.</li>
          <li><a href="http://cdnjs.com/libraries/p5.js">CDN</a> - Link to statically hosted file.</li>
        </ul>


        
      </section>

      <?php include('../footer.php'); ?>
    </div><!-- end column-span -->

    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    <object type="image/svg+xml" data="../img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>


    <?php include('../end.php'); ?>
  </body>
</html>