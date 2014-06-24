<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section id="about">
          <h2>Variable Scope</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var a = 80;  // Create a global variable &quot;a&quot;

function setup() {
  createCanvas(720, 400);
  background(0);
  stroke(255);
  noLoop();
}

function draw() {
  // Draw a line using the global variable &quot;a&quot;
  line(a, 0, a, height);
  
  // Create a new variable &quot;a&quot; local to the for() statement 
  for (var a = 120; a &lt; 200; a += 3) {
    line(a, 0, a, height);
  }
  
  // Create a new variable &quot;a&quot; local to the draw() function
  var a = 300;
  // Draw a line using the new local variable &quot;a&quot;
  line(a, 0, a, height);  
  
  // Make a call to the custom function drawAnotherLine()
  drawAnotherLine();
  
  // Make a call to the custom function setYetAnotherLine()
  drawYetAnotherLine();
}

function drawAnotherLine() {
  // Create a new variable &quot;a&quot; local to this method
  var a = 320;
  // Draw a line using the local variable &quot;a&quot;
  line(a, 0, a, height);
}

function drawYetAnotherLine() {
  // Because no new local variable &quot;a&quot; is set, 
  // this lines draws using the original global
  // variable &quot;a&quot; which is set to the value 20.
  line(a+3, 0, a+3, height);
}</code></pre>
          </div>
          </div>
          </p>
          <p>Variables have a global or local &quot;scope&quot;. For example, 
 variables declared within either the setup() or draw() functions may be 
 only used in these functions. Global variables, variables declared outside 
 of setup() and draw(), may be used anywhere within the program. If a local 
 variable is declared with the same name as a global variable, the program 
 will use the local variable to make its calculations within the current 
 scope. Variables are localized within each block, the space between a { 
 and }.
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