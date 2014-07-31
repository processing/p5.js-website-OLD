<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="libraries-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>
      <h2>Libraries</h2>

      <h3></h3>

      <div class="left-column">
        <a class="nounderline" href="<?php echo getRoot(); ?>reference/#/libraries/p5.dom">
        <div class="label">
        <img src="../img/libraries/dom.jpg"></a>
        <a class="nounderline" href="<?php echo getRoot(); ?>reference/#/libraries/p5.dom"><h4>p5.dom</h4></a>
        </div>
        <p>Description of p5.dom library would go here. You can imagine that the text would run at least 2-3 lines.</p> 
      </div>

      <div class="right-column">
        <a class="nounderline" href="<?php echo getRoot(); ?>reference/#/libraries/p5.sound">
        <div class="label">
        <img src="../img/libraries/sound.jpg"></a>
        <a class="nounderline" href="<?php echo getRoot(); ?>reference/#/libraries/p5.sound"><h4>p5.sound</h4></a>
        </div>
        <p>p5.sound extends p5 with <a href="http://www.w3.org/TR/webaudio/">Web Audio</a> functionality including audio input, playback, analysis and synthesis.</p> 
      </div>

      <div class="spacer"></div>

      <a name="contributed" class="anchor"><h3>Contributed</h3></a>

      <div class="left-column">
        <a class="nounderline" href="<?php echo getRoot(); ?>reference/#/libraries/p5.dom">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="#"><h4>p5.xxx</h4></a>
        </div>
        <p>Description of p5.xxx library would go here. You can imagine that the text would run at least 2-3 lines.</p> 
      </div>

      <div class="right-column">
        <a class="nounderline" href="<?php echo getRoot(); ?>reference/#/libraries/p5.sound">
        <div class="label">
        <img src="../img/learn/lib_placeholder.jpg"></a>
        <a class="nounderline" href="#"><h4>p5.xxx</h4></a>
        </div>
        <p>Description of p5.xxx library would go here. You can imagine that the text would run at least 2-3 lines.</p> 
      </div>

      <div class="spacer"></div>


      <h3>Using a library</h3>

      <p>A p5.js library can be any JavaScript code that extends or adds to the p5.js core functionality. 
      There are two categories of libraries. Core libraries (<a href="<?php echo getRoot(); ?>reference/#/libraries/dom">p5.dom</a> 
      and <a href="<?php echo getRoot(); ?>reference/#/libraries/sound">p5.sound</a>) are part of the p5.js 
      distribution, while contributed libraries are developed, owned, and maintained by members of the p5.js 
      community.</p>

      <p>To include a library in your sketch, link it into your HTML file, after you have linked in p5.js. 
      An example HTML file might look like this:</p>
      <pre><code class="language-markup">&lt;!doctype html>
&lt;html>
&lt;head>
  &lt;script src="p5.js"></script>
  &lt;script src="p5.sound.js"></script>
  &lt;script src="sketch.js"></script>
&lt;/head>
&lt;body>
&lt;/body>
&lt;/html></code></pre>

      <a name="create_libraries" class="anchor"><h3>Create Your Own</h3></a>

      <p>p5.js welcomes libraries contributed by others! Check out the 
      <a href="https://github.com/lmccart/p5.js/wiki/Libraries">libraries tutorial</a> for more
      specifics about how to create one.</p>

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