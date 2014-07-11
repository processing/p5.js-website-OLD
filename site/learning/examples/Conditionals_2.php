<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2>Conditionals 2</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
function setup() {

  createCanvas(710, 360); 
  background(0);

  for(var i = 2; i &lt; width-2; i += 4) {
    // If 'i' divides by 20 with no remainder
    if((i % 20) == 0) {
      stroke(255);
      line(i, 80, i, height/2);
    // If 'i' divides by 10 with no remainder
    } else if ((i % 10) == 0) {
      stroke(153);
      line(i, 20, i, 180); 
    // If neither of the above two conditions are met
    // then draw this line
    } else {  
      stroke(102);
      line(i, height/2, i, height-20);
    }
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>We extend the language of conditionals from the previous
 example by adding the keyword &quot;else&quot;. This allows conditionals 
 to ask two or more sequential questions, each with a different
 action. 
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