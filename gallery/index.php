<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="contribute-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>

      <h2>Gallery</h2>

      <p>
        A curated collection of projects created with p5.js. 
        Want to see your work here? Get in touch at 
        <a href="mailto:feature@p5js.org">feature@p5js.org</a>.
      </p>

    <div class = "gallery-item">
        <a href="http://stinedec.com/Shape-Intersect-p5js/sketch.html"
        target="_blank">
           <img class = "gallery-img" src="../img/gallery-images/social-tension.png" 
           width = "5" alt = "preview image" title = "Social Tension">
        </a>
        <br>
        <p>
         <a href="http://stinedec.com/Shape-Intersect-p5js/sketch.html"
         target="_blank">
            Social Tension
         </a>
         <br>
         <a class = "gallery-source"> Christine de Carteret, 2015 </a>
        </p>
    </div>
    <div class = "gallery-item">
        <a href="http://samanthaticknor.com/images/scroll/two.html"
        target="_blank">
           <img class = "gallery-img" src="../img/gallery-images/ol-scroll.png" 
           width = "5" alt = "preview image" title = "Diversity Panel">
        </a>
        <br>
        <p>
         <a href="http://samanthaticknor.com/images/scroll/two.html"
         target="_blank">
            Ol' Scroll
         </a>
         <br>
         <a class = "gallery-source"> Sam Ticknor, 2015 </a>
        </p>
    </div>

    <div class = "gallery-item">
        <a href="http://www.michellechandra.com/portfolio/star-trails/"
        target="_blank">
           <img class = "gallery-img" src="../img/gallery-images/star-trails.png" 
           width = "5" alt = "preview image" title = "Star Trails">
        </a>
        <br>
        <p>
         <a href="http://www.michellechandra.com/portfolio/star-trails/"
         target="_blank">
            Star Trails
         </a>
         <br>
         <a class = "gallery-source"> Michelle Chandra, Jason Sigal, 2014 </a>
        </p>
    </div>

    <div class="spacer"></div>

    <div class = "gallery-item">
        <a href="http://emojibooth.biz/"
        target="_blank">
           <img class = "gallery-img" src="../img/gallery-images/emoji-booth.png" 
           width = "5" alt = "preview image" title = "Diversity Panel">
        </a>
        <br>
        <p>
         <a href="http://emojibooth.biz/"
         target="_blank">
            Emoji Cam
         </a>
         <br>
         <a class = "gallery-source"> Alex Wiles, 2015</a>
        </p>
    </div>

    <div class = "gallery-item">
        <a href="http://therewasaguy.github.io/p5-music-viz/demos/08_echonestPitchSegment/"
        target="_blank">
           <img class = "gallery-img" src="../img/gallery-images/music-viz.png" 
           width = "5" alt = "preview image" title = "Diversity Panel">
        </a>
        <br>
        <p>
         <a href="http://therewasaguy.github.io/p5-music-viz/demos/08_echonestPitchSegment/"
         target="_blank">
            Music Viz
         </a>
         <br>
         <a class = "gallery-source"> Jason Sigal, 2014 </a>
        </p>
    </div>

    <div class = "gallery-item">
        <a href="http://ericrosenbaum.github.io/MK-1/"
        target="_blank">
           <img class = "gallery-img" src="../img/gallery-images/keyboard.png" 
           width = "5" alt = "preview image" title = "Keyboard">
        </a>
        <br>
        <p>
         <a href="http://ericrosenbaum.github.io/MK-1/"
         target="_blank">
            Sampling Keyboard
         </a>
         <br>
         <a class = "gallery-source"> Eric Rosenbaum, 2014 </a>
        </p>
    </div>

    <div class="spacer"></div>

</div>

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
