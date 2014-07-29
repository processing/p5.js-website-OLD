<!DOCTYPE html>

<?php include('header.php'); ?>
<body id="home-page">

  <?php include('heading.php'); ?>

  <!-- content sections -->
  <div class="column-span">
    <section id="home">

      <ul id="menu" class="top_menu">
        <li><a href="<?php echo getRoot(); ?>download/">Download</a></li> 
        <li><a href="<?php echo getRoot(); ?>get-started/">Get&nbsp;Started</a></li>
        <li><a href="<?php echo getRoot(); ?>reference/">Reference</a></li>
        <li><a href="<?php echo getRoot(); ?>libraries/">Libraries</a></li>
        <li><a href="<?php echo getRoot(); ?>learn/">Learn</a></li>
        <li><a href="<?php echo getRoot(); ?>contribute/">Develop</a></li>
      </ul>

      <p>p5.js is a JavaScript library that starts with the original goal of 
      <a href="http://processing.org">Processing</a>, to make coding accessible 
      for artists, designers, educators, beginners, and reinterpets this for today, 
      for the web. The library is intended to introduce creative coding, introduce 
      web development, and provide a tie between the two. It it important that while 
      this is accessible for beginners, it’s not a sandbox environment and people 
      develop real web development literacy, and the ability to extend and learn new things 
      on their own. The library is not domain specific, it’s useful for general creative 
      coding from drawing, to working with text, images, DOM, etc.</p>

      <p>p5.js is about bringing Processing ideas and community to JavaScript and the web, 
      rather than emulating Processing/Java through JavaScript. We hope to build a strong 
      support community of users for constructive help, with a focus on teaching and learning. 
      We have been focusing on language design, development, and documentation, but a p5.js 
      web IDE is also in the plan.</p>
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
