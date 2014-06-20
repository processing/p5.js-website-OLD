<!DOCTYPE html>

  <?php include('header.php'); ?>
  <body id="home-page">

    <?php include('sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="about">
        <h2>Welcome!</h2>
        <p>
        <div id="demo" style="height:300px; width:100%"></div>
        <div class="example">
      <pre><code class="language-javascript">function setup() {
  createCanvas(720, 300);
  background(100, 20, 100);
}

function draw() {
  if (mouseIsPressed) {
    fill(0);
  } else {
    fill(255);
  }
  ellipse(mouseX, mouseY, 80, 80);
}</code></pre>  
        </div>
        </p>

        <p><a href="#"><strong>> Download p5.js</strong></a></p>
        <p><a href="#"><strong>> Try examples</strong></a></p>
        <p>p5.js is a JavaScript library that brings the original goals of Processing to the web. It supports canvas drawing, and a lot more.</p>
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