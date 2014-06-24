<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="about">
          <h2>No Loop</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var y;

// The statements in the setup() function 
// execute once when the program begins
function setup() 
{
  // createCanvas should be the first statement
  createCanvas(720, 400);  
  stroke(255);     // Set line drawing color to white
  noLoop();
  
  y = height * 0.5;
}

// The statements in draw() are executed until the 
// program is stopped. Each statement is executed in 
// sequence and after the last line is read, the first 
// line is executed again.
function draw() 
{ 
  background(0);   // Set the background to black
  y = y - 1; 
  if (y &lt; 0) { y = height; } 
  line(0, y, width, y);  
} 
</code></pre>
          </div>
          </div>
          </p>
          <p>The noLoop() function causes draw() to only execute once. 
 Without calling noLoop(), the code inside draw() is run continually.
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