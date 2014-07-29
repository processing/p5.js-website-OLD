<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Iteration</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var y;
var num = 14;

function setup() {

  createCanvas(710, 360);
  background(102);
  noStroke();
     
  // Draw white bars 
  fill(255);
  y = 60;
  for(var i = 0; i &lt; num/3; i++) {
    rect(50, y, 475, 10);
    y+=20;
  }

  // Gray bars
  fill(51);
  y = 40;
  for(var i = 0; i &lt; num; i++) {
    rect(405, y, 30, 10);
    y += 20;
  }
  y = 50;
  for(var i = 0; i &lt; num; i++) {
    rect(425, y, 30, 10);
    y += 20;
  }
    
  // Thin lines
  y = 45;
  fill(0);
  for(var i = 0; i &lt; num-1; i++) {
    rect(120, y, 40, 1);
    y+= 20;
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>Iteration with a &quot;for&quot; structure to construct repetitive forms.
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