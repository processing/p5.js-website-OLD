<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <a href="../#examples"><p>< Back to Examples</p></a>
          <h2></h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">unction Module(_xOff, _yOff, _x, _y, _speed, _unit) {
  this.xOff = _xOff;
  this.yOffset = _yOff;
  this.x = _x;
  this.y = _y;
  this.speed = _speed;
  this.unit = _unit;
}

  // Custom method for updating the variables
Module.prototype.update = function() {
  this.x = this.x + (this.speed * this.xDirection);
  if (x &gt;= unit || x &lt;= 0) {
    xDirection *= -1;
    x = x + (1 * xDirection);
    y = y + (1 * yDirection);
  }
  if (y &gt;= unit || y &lt;= 0) {
    yDirection *= -1;
    y = y + (1 * yDirection);
  }
}
  
  // Custom method for drawing the object
  void draw() {
    fill(255);
    ellipse(xOffset + x, yOffset + y, 6, 6);
  }
}</code></pre>
          </div>
          </div>
          </p>
          <p></p>
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