<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2>Conditionals 1</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
function setup() {

  createCanvas(710, 360); 
  background(0);

  for(var i = 10; i &lt; width; i += 10) {
    // If 'i' divides by 20 with no remainder draw the first line
    // else draw the second line
    if(i%20 == 0) {
      stroke(255);
      line(i, 80, i, height/2);
    } else {
      stroke(153);
      line(i, 20, i, 180); 
    }
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>Conditions are like questions. 
 They allow a program to decide to take one action if 
 the answer to a question is true or to do another action
 if the answer to the question is false. 
 The questions asked within a program are always logical
 or relational statements. For example, if the variable 'i' is 
 equal to zero then draw a line.
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