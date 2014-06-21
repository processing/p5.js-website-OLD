<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="about">
          <h2>Points and Lines</h2>
          <p>
          <div class="example">
          <pre><code class="language-javascript">
function setup() {
  
  var d = 70;
  var p1 = d;
  var p2 = p1+d;
  var p3 = p2+d;
  var p4 = p3+d;

  // Sets the screen to be 640 pixels wide and 360 pixels high
  createCanvas(720, 400);
  background(0);
  noSmooth();

  translate(140, 0);

  // Draw gray box
  stroke(153);
  line(p3, p3, p2, p3);
  line(p2, p3, p2, p2);
  line(p2, p2, p3, p2);
  line(p3, p2, p3, p3);

  // Draw white points
  stroke(255);
  point(p1, p1);
  point(p1, p3); 
  point(p2, p4);
  point(p3, p1); 
  point(p4, p2);
  point(p4, p4);
}</code></pre>
          </div>
          </p>
          <p>Points and lines can be used to draw basic geometry. 
 Change the value of the variable 'd' to scale the form. The four 
 variables set the positions based on the value of 'd'.
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