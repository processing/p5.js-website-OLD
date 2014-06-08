<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="home-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section id="getting-started">

      <h2>Development</h2>

      <p>
        <a href="https://github.com/lmccart/p5.js/wiki/Development" target="_blank">development tutorial</a>
      </p>

      <p>
        github
      </p> 

      <p>
        IRC
      </p> 

      <p>
        People:<br>
        Lauren McCarthy<br>
        Evelyn Eastmond<br>

        Sam Lavigne<br>
        Jason Sigal<br>

        Esteban Almiron<br>
        
        Dan Shiffman<br>
        Scott Garner<br>


        Bocoup? Other github contributors?<br>


        Casey Reas and Ben Fry<br>
      </p> 
    </section>

  
    <?php include('../footer.php'); ?>
    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    </div><!-- end id="container"  -->

    <object type="image/svg+xml" data="<?php echo getRoot(); ?>img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>


    <?php include('../end.php'); ?>
  </body>
</html>