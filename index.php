<!DOCTYPE html>

<?php include('header.php'); ?>
<body id="home-page">

  <?php include('heading.php'); ?>

  <!-- content sections -->
  <div class="column-span">

    <ul id="menu" class="top_menu" >
      <li><a href="<?php echo getRoot(); ?>download/">Download</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>get-started/">Start</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>reference/">Reference</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>libraries/">Libraries</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>learn/">Learn</a></li>
      <object width="0" height="0" type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="separator-design-element">*</object>
      <li><a href="<?php echo getRoot(); ?>contribute/">Contribute</a></li>
    </ul>

    <section id="home">
      <p><a href="http://hello.p5js.org">p5.js</a> is a JavaScript library that starts with the original goal of 
      <a href="http://processing.org">Processing</a>, to make coding accessible 
      for artists, designers, educators, and beginners, and reinterpets this for today's web. 
      </p>

      <p>Using the original metaphor of a software sketchbook, p5.js has a full set of
      drawing functionality. However, you're not limited
      to your drawing canvas, you can think of your whole browser page as your sketch!
      For this, p5.js has addon <a href="libraries/">libraries</a> that make it 
      <a href="http://hello.p5js.org">
      easy to interact</a> with other HTML5
      objects, including text, input, video, webcam, and sound.</p>

      <p>p5.js is a new interpretation, not an emulation or port, and it is in active development.
      An official editing environment is coming soon, as well as many more features!</p>
    </section>

    <?php include('footer.php'); ?>
  </div><!-- end column-span -->

  <!-- outside of column for footer to go across both -->

  <p class="clearfix"> &nbsp; </p>

  <object type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="asterisk-design-element">
    *<!-- to do: add fallback image in CSS -->
  </object>

  <?php include('end.php'); ?>
</body>
</html>
