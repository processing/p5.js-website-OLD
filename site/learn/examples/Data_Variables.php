<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Variables</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
function setup() {

  createCanvas(780, 440);
  background(0);
  stroke(153);
  strokeWeight(4);
  strokeCap(SQUARE);

  var a = 50;
  var b = 120;
  var c = 180;

  line(a, b, a+c, b);
  line(a, b+10, a+c, b+10);
  line(a, b+20, a+c, b+20);
  line(a, b+30, a+c, b+30);

  a = a + c;
  b = height-b;

  line(a, b, a+c, b);
  line(a, b+10, a+c, b+10);
  line(a, b+20, a+c, b+20);
  line(a, b+30, a+c, b+30);

  a = a + c;
  b = height-b;

  line(a, b, a+c, b);
  line(a, b+10, a+c, b+10);
  line(a, b+20, a+c, b+20);
  line(a, b+30, a+c, b+30);
}</code></pre>
          </div>
          </div>
          </p>
          <p>Variables are used for storing values. In this example, change 
 the values of variables to affect the composition.
 </p>
          <p><a style="border-bottom:none !important;" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target=_blank><img src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" style="width:88px"/></a></p>
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