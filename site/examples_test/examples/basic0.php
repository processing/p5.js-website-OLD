<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="home-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="about">
          <h2>basic0</h2>
          <p>
          <div class="example">
          <pre><code class="language-javascript">
function setup() {
  createCanvas(720, 400);
}

function draw() {
  background(42, 169, 217);

  fill(242, 228, 21);
  ellipse(100,100,100,100);

  fill(162,217, 39);
  rect(300,100,150,150);
}</code></pre>
          </div>
          </p>
          <p>This is a basic example.</p>
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