<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="development-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>

      <h2>Development</h2>

      <p>
        p5.js is a collaborative project created by many individuals. 
        <a href="https://github.com/lmccart/p5.js">Github</a> is the main place where code is collected,
        issues are documented, and discussions are had. If you'd like to be involved, you can follow
        along there, see below for more specific ways you can contribute.
      </p>



      <h3>Get involved</h3>


      <p>
        p5.js is a collaborative project and you are invited to not only use but also help
        create it.  
      </p>

      <ul>
        <li><strong>Develop</strong> — Follow along on <a href="https://github.com/lmccart/p5.js">github</a>
        and check out the <a href="https://github.com/lmccart/p5.js/wiki/Development">
        development tutorial</a> to get started.</li>
        <li><strong>Create documentation</strong> — Everyone loves documentation. Help is needed <a href="#">
        creating tutorials</a>, <a href="#">porting examples</a>, and <a href="https://github.com/lmccart/p5.js/wiki/Inline-documentation">
        adding documentation</a>.</li>
        <li><strong>Teach</strong> — Check out the <a href="#">education page</a> on the wiki to view
        resources from past classes, workshops, and events. Add your own links!</li>
        <li><strong>Something else?</strong> — p5.js is looking for designers, artists, writers, organizers,
        and any other role you can think of. Get in touch at <a href="mailto:hello@p5js.org">hello@p5js.org</a>.</li>
      </ul>

      <p>
        
      </p> 



      <h3>Contributors @TODO</h3>
<!--
        Some people to include...<br>
        Lauren McCarthy<br>
        Evelyn Eastmond<br>

        Jerel Johnson, identity and website design<br>
        Sam Lavigne, IDE (GSoC)<br>
        Jason Sigal, p5.Sound (GSoC)<br>

        Esteban Almiron<br>

        Dan Shiffman<br>
        Scott Garner, Hello p5.js<br>

        ITP working group?<br>
        Bocoup? Other github contributors?<br>
-->

        <br>
        Organizations:<br>
        <a href="http://processing.org">Processing Foundation</a><br>
        <a href="http://itp.nyu.edu">ITP</a><br>
        <a href="http://risd.edu">RISD</a><br>
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