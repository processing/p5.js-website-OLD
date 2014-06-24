<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="about">
          <h2>Width and Height</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
function setup() {
  createCanvas(720, 400);
}

function draw() {
  background(127);
  noStroke();
  for (var i = 0; i &lt; height; i += 20) {
    fill(129, 206, 15);
    rect(0, i, width, 10);
    fill(255);
    rect(i, 0, 10, height);
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>The 'width' and 'height' variables contain the 
 width and height of the display window as defined in the size() 
 function.
 </p>
      </section>

      <?php include('../../footer.php'); ?>
    </div><!-- end column-span -->

    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    <object type="image/svg+xml" data="../../img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>


    <?php include('../../end.php'); ?>
  </body>
</html>