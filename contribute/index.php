<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="contribute-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>

      <h2>Contribute</h2>

      <h3>Get involved</h3>


      <p>
        p5.js is a collaborative project created by many individuals, and you are invited to help.
        All types of involvement are welcome.
      </p>

    <p>Develop &#8212; <a href="https://github.com/processing/p5.js">Github</a> is the main place where code is collected,
        issues are documented, and discussions about code are had. Check out the <a href="https://github.com/processing/p5.js/wiki/Development">
        development tutorial</a> to get started, or <a href="../libraries/#create-your-own">
        create your own library.</a></p>


    <p>Create documentation &#8212; Everyone loves documentation. Help is needed <a href="https://github.com/lmccart/p5js.org/wiki/Adding-examples">porting examples</a>, and <a href="https://github.com/processing/p5.js/wiki/Inline-documentation">
        adding documentation</a>, and creating tutorials.</p>

    <p>Teach &#8212; Check out the <a href="https://github.com/processing/p5.js/wiki/Education">education page</a> on the wiki to view
        resources from past classes, workshops, and events. Add your own links!</p>

    <p>Create &#8212; p5.js is looking for designers, artists, coders, programmers to bring your creative and amazing work to show
       on the front page and inspire other people.  <a href="https://docs.google.com/forms/d/1dLNS9VB12TXl9vee0ys8x23ZCNo9RuzG8thIrAx0nTI/viewform">Submit your work!</a> Get in touch at
       <a href="mailto:feature@p5js.org">feature@p5js.org</a>.</p>



    <p>Something else? &#8212; p5.js is looking for designers, artists, writers, organizers,
        and any other role you can think of. Get in touch at <a href="mailto:hello@p5js.org">hello@p5js.org</a>.</p>


      <div id="contributors-subsection">
      <a name="contributors" class="anchor"><h3>Contributors</h3></a>

        <p>p5.js is actively developed by <a href="http://lauren-mccarthy.com">Lauren McCarthy</a> in
        collaboration with many others.</p>

        <p><a href="http://evelyneastmond.com">Evelyn Eastmond</a> helped conceptualize this project
        from the early stages and did signicant work with core code structure and organization, and
        creation of educational materials.</p>

        <p><a href="http://www.shiffman.net/">Dan Shiffman</a> added the vector and math
        functionality, and developed examples and materials while running some of the first
        trials of p5.js in the classroom.</p>

        <p><a href="http://jereljohnson.com/">Jerel Johnson</a> created the visual identity, logo, and website
        design.</p>

        <p><a href="http://lav.io/">Sam Lavigne</a> is leading the development of the p5.js IDE.</p>

        <p><a href="http://www.jasonsigal.cc/">Jason Sigal</a> is currently working on the p5.Sound
        library and I/O functionality as part of Google Summer of Code.</p>

        <p><a href="http://scott.j38.net/">Scott Garner</a> made the fantastic <a href="http://hello.p5js.org">
        hello p5.js</a>.</p>

        <p>The students and faculty in the p5.js working group at <a href="http://itp.nyu.edu">NYU ITP</a>
        meet biweekly throughout the school year to work on everything from language design and
        documentation to testing and bug fixes.</p>

        <p>Developers at <a href="http://bocoup.com">Bocoup</a>, including <a href="http://clome.info/">
        Yannick Assogba</a>, <a href="http://www.kadamwhite.com/">K.Adam White</a>, and
        <a href="http://bobholt.me/">Bob Holt</a>, have made significant code contributions and offer
        invaluable guidance with JS and development practices.
        </p>

        <p><a href="https://github.com/processing/p5.js/graphs/contributors">Many others</a> from around the
        world contribute code and ideas to the library and documentation.</p>

        <svg width="1em" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
        <path stroke-miterlimit="10" d="M16.909,10.259l8.533-2.576l1.676,5.156l-8.498,2.899l5.275,7.48
            l-4.447,3.225l-5.553-7.348L8.487,26.25l-4.318-3.289l5.275-7.223L0.88,12.647l1.678-5.16l8.598,2.771V1.364h5.754V10.259z"/>
        </svg>

        <p><a href="http://processing.org">The Processing Foundation</a> &#8212; <a href="http://reas.com/">Casey Reas</a>,
        <a href="http://benfry.com/">Ben Fry</a>, and <a href="http://www.shiffman.net/">Dan Shiffman</a>,
        have provided support and guidance since their initial provocation of the project.</p>

        <p><a href="http://itp.nyu.edu">NYU ITP</a> and <a href="http://risd.edu">RISD</a> have offered
        significant support while incorporating p5.js into their curricula.</p>
        </div>

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
