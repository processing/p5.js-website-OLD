<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Array</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var coswave = [];

function setup() {

  createCanvas(780, 395);
  for (var i = 0; i &lt; width; i++) {
    var amount = map(i, 0, width, 0, PI);
    coswave[i] = abs(cos(amount));
  }
  background(255);
  noLoop();
}

function draw() {
  var y1 = 0;
  var y2 = height/3;
  for (var i = 0; i &lt; width; i+=3) {
    stroke(coswave[i]*255);
    line(i, y1, i, y2);
  }

  y1 = y2;
  y2 = y1 + y1;
  for (var i = 0; i &lt; width; i+=3) {
    stroke(coswave[i]*255 / 4);
    line(i, y1, i, y2);
  }
  
  y1 = y2;
  y2 = height;
  for (var i = 0; i &lt; width; i+=3) {
    stroke(255 - coswave[i]*255);
    line(i, y1, i, y2);
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>An array is a list of data. Each piece of data in an array 
 is identified by an index number representing its position in 
 the array. Arrays are zero based, which means that the first 
 element in the array is [0], the second element is [1], and so on. 
 In this example, an array named &quot;coswav&quot; is created and
 filled with the cosine values. This data is displayed three 
 separate ways on the screen.  
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