<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#examples">< Back to Examples</a></p>
          <h2>Logical Operators</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var test = false;

function setup() {

  createCanvas(780, 395); 
  background(126);

  for (var i = 5; i &lt;= height; i += 5) {
    // Logical AND
    stroke(0);
    if((i &gt; 35) &amp;&amp; (i &lt; 100)) {
      line(width/4, i, width/2, i);
      test = false;
    }
    
    // Logical OR
    stroke(76);
    if ((i &lt;= 35) || (i &gt;= 100)) {
      line(width/2, i, width, i);
      test = true;
    }
    
    // Testing if a boolean value is &quot;true&quot;
    // The expression &quot;if(test)&quot; is equivalent to &quot;if(test == true)&quot;
    if (test) {
      stroke(0);
      point(width/3, i);
    }
      
    // Testing if a boolean value is &quot;false&quot;
    // The expression &quot;if(!test)&quot; is equivalent to &quot;if(test == false)&quot;
    if (!test) {
      stroke(255);
      point(width/4, i);
    }
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p>The logical operators for AND (&amp;&amp;) and OR (||) are used to 
 combine simple relational statements into more complex expressions.
 The NOT (!) operator is used to negate a boolean statement. 
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