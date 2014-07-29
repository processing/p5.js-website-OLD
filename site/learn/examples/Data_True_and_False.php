<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>True and False</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
function setup() {

  createCanvas(710, 400);
  background(0);
  stroke(255);

  var b = false;
  var d = 20;
  var middle = width/2;;

  for (var i = d; i &lt;= width; i += d) {
    
    if (i &lt; middle) {
      b = true;
    } else {
      b = false;
    }
    
    if (b == true) {
      // Vertical line
      line(i, d, i, height-d);
    }
    
    if (b == false) {
      // Horizontal line
      line(middle, i - middle + d, width-d, i - middle + d);
    }
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>A Boolean variable has only two possible values: true or false. 
 It is common to use Booleans with control statements to determine the flow 
 of a program. In this example, when the boolean value &quot;x&quot; is true, vertical 
 black lines are drawn and when the boolean value &quot;x&quot; is false, horizontal 
 gray lines are drawn.
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