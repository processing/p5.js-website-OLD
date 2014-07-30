<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Loop</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var y = 100;

// The statements in the setup() function 
// execute once when the program begins
function setup() {
  createCanvas(780, 440);  // Size must be the first statement
  stroke(255);     // Set line drawing color to white
  frameRate(30);
}
// The statements in draw() are executed until the 
// program is stopped. Each statement is executed in 
// sequence and after the last line is read, the first 
// line is executed again.
function draw() { 
  background(0);   // Set the background to black
  y = y - 1; 
  if (y &lt; 0) { 
    y = height; 
  } 
  line(0, y, width, y);  
} </code></pre>
          </div>
          </div>
          </p>
          <p>The code inside the draw() function runs continuously from top 
 to bottom until the program is stopped.
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