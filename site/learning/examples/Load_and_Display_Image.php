<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="home-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <h2>Load and Display Image</h2>
          <p>
          <div class="example">
          <div>
          <pre><code class="language-javascript">
var img;  // Declare variable 'img'.

function setup() {
  createCanvas(720, 400);
  // The image file must be in the data folder of the current sketch 
  // to load successfully
  img = loadImage(&quot;assets/moonwalk.jpg&quot;);  // Load the image into the program  
}

function draw() {
  // Displays the image at its actual size at point (0,0)
  image(img, 0, 0);
  // Displays the image at point (0, height/2) at half of its size
  image(img, 0, height/2, img.width/2, img.height/2);
}</code></pre>
          </div>
          </div>
          </p>
          <p>Images can be loaded and displayed to the screen at their 
 actual size or any other size.
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