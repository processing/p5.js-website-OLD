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
        <li><h4>Develop</h4>Follow along on <a href="https://github.com/lmccart/p5.js">github</a>
        and check out the <a href="https://github.com/lmccart/p5.js/wiki/Development">
        development tutorial</a> to get started, or <a href="http://localhost/p5js.org/site/libraries/#create_libraries">
        create your own library.</a></li>
        <li><h4>Create documentation</h4>Everyone loves documentation. Help is needed <a href="https://github.com/lmccart/p5js.org/wiki/Adding-examples">porting examples</a>, and <a href="https://github.com/lmccart/p5.js/wiki/Inline-documentation">
        adding documentation</a>, and creating tutorials.</li>
        <li><h4>Teach</h4>Check out the <a href="#">education page</a> on the wiki to view
        resources from past classes, workshops, and events. Add your own links!</li>
        <li><h4>Something else?</h4>p5.js is looking for designers, artists, writers, organizers,
        and any other role you can think of. Get in touch at <a href="mailto:hello@p5js.org">hello@p5js.org</a>.</li>
      </ul>

      <p>
        
      </p> 



      <a name="contributors" class="anchor"><h3>Contributors</h3></a>

        <p>
        p5.js is actively developed by <a href="http://lauren-mccarthy.com">Lauren McCarthy</a> in
        collaboration with many others.<br>
        <a href="http://evelyneastmond.com">Evelyn Eastmond</a> helped conceptualize this project
        from the early stages and did signicant work with core code structure and organization,
        educational materials, and development best practices.<br>
        <a href="http://www.shiffman.net/">Dan Shiffman</a> has led the charge on the vector and math
        functionality, and developed examples and materials while fearlessly running some of the first
        trials of p5.js in the classroom.<br>
        <a href="http://www.estebanalmiron.com/">Esteban Almiron</a> added the reference engine, as well
        as continuing to contribute many thoughts and code improvements as the project develops.<br>


        <a href="http://jereljohnson.com/">Jerel Johnson</a> created the visual identity, logo, and website 
        design.<br>
        <a href="http://lav.io/">Sam Lavigne</a> is currently working on an IDE as part of Google
        Summer of Code.<br>
        <a href="http://www.jasonsigal.cc/">Jason Sigal</a> is currently working on the p5.Sound 
        library and I/O functionality as part of Google Summer of Code.<br>
        <a href="http://scott.j38.net/">Scott Garner</a> made the fantastic <a href="http://hello.p5js.org">
        hello p5.js</a>.<br>

        The students and faculty in the p5.js working group at <a href="http://itp.nyu.edu">NYU ITP</a>
        meet biweekly throughout the school year to work on everything from language design and 
        documentation to testing and bug fixes.<br>

        Developers at <a href="http://bocoup.com">Bocoup</a>, including <a href="http://clome.info/">
        Yannick Assogba</a>, <a href="http://www.kadamwhite.com/">K.Adam White</a>, and
        <a href="http://bobholt.me/">Bob Holt</a>, have made significant code contributions and offer
        invaluable guidance with JS and development practices.
        </p>

        <p>
        <a href="http://processing.org">The Processing Foundation</a> – <a href="http://reas.com/">Casey Reas</a>, 
        <a href="http://benfry.com/">Ben Fry</a>, and <a href="http://www.shiffman.net/">Dan Shiffman</a>, 
        have provided support and guidance since their initial provocation of the project.<br>
        <a href="http://itp.nyu.edu">NYU ITP</a> and <a href="http://risd.edu">RISD</a> have offered 
        significant support while incorporating p5.js into their curricula.
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