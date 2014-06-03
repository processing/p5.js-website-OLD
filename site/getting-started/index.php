<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="home-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
    <section id="about">
        <h2>About</h2>
        <p>
        p5.js is a JavaScript library that starts with the original goal of <a href="http://processing.org">Processing</a>, to make coding accessible for artists, designers, educators, beginners, and reinterpets this for today, for the web. The library is intended to introduce creative coding, introduce web development, and provide a tie between the two. It it important that while this is accessible for beginners, it’s not a sandbox environment and people develop real web development literacy, and the ability to extend and learn new things on their own. The library is not domain specific, it’s useful for general creative coding from drawing, to working with text, images, DOM, etc.</p>

        <p>p5.js is about bringing Processing ideas and community to JavaScript and the web, rather than emulating Processing/Java through JavaScript. We hope to build a strong support community of users for constructive help, with a focus on teaching and learning. We have been focusing on language design, development, and documentation, but a p5.js web IDE is also in the plan.</p>
    </section>

    <section id="getting-started">

        <h2>Getting Started</h2>
        <p>
        Download the <a href="https://raw.github.com/lmccart/p5.js/master/dist/p5.js" target="_blank">p5.js file</a> and create a new index.html file and a new sketch.js file. You want to link to p5.js and your sketch.js file in the head of the html file. Make sure all three files are in the same folder. You can use any <a href="http://en.wikipedia.org/wiki/Source_code_editor" target="_blank">code editor</a> you like, we recommend <a href="www.sublimetext.com/2" target="_blank">Sublime Text</a>.</p>
        <p>Example index.html file:</p>

        <pre><code class="language-markup">&lt;!doctype html>
&lt;html>
&lt;head>
  &lt;script src="p5.js"></script>
  &lt;script src="sketch.js"></script>
&lt;/head>
&lt;body>
&lt;/body>
&lt;/html></code></pre>
    
    <p>Example sketch.js file:</p>
    <pre><code class="language-javascript">function setup() {
// The createCanvas function tells the computer 
// to make a 640x360 drawing space.
createCanvas(640,360);
}

function draw() {
// This line tells the computer which color to make
// the background of the drawing space.
background(204, 153, 0);

// This line tells the computer to draw an ellipse,
// with the center 50 pixells over from the left and 
// 50 pixles down from the top, with a width and
// height of 80 pixels.
ellipse(50, 50, 80, 80);
}</code></pre>
    
      <p>Alternatively, you can download the <a href="https://github.com/lmccart/p5.js/archive/master.zip" target="_blank">whole project</a> and copy the examples/empty-example folder to any location you like and edit the sketch.js file.</p>

      <p><strong>Reference</strong>. View the reference <a href="https://github.com/lmccart/p5.js/wiki/Reference" target="_blank">here</a>. The <a href="https://github.com/lmccart/p5.js/blob/master/api.md">API page</a> lists all implemented functions.</p>   
      <p><strong>Source</strong>. The source code of p5.js is available on <a href="https://github.com/lmccart/p5.js" target="_blank">github</a>.</p>      
    </section>

    <section id="learning">
        <h2>Learning</h2>
        <ul>
            
            <li><a href="https://github.com/lmccart/p5.js/wiki/Getting-Started">Getting started</a> - set up your environment and create your first sketch.</li>
            
            <li><a href="https://github.com/lmccart/p5.js/wiki/Processing-syntax-conversion">Processing syntax conversion</a> - Processing > p5.js and back!</li>
            
            <li><a href="https://github.com/lmccart/p5.js/wiki/DOM-Extensions">Beyond the canvas</a> - creating and manipulating elements on the page beyond the canvas.</li>
            
            <li><a href="https://github.com/lmccart/p5.js/wiki/Integrating-other-libraries">Working with other libraries</a> - finding, adding, and integrating other JS libraries.</li>
            
            <li><a href="https://github.com/lmccart/p5.js/wiki/Local-server">Enabling a local server</a> - some functionality (loading external files, for example) requires the use of a local server for local development. This tutorial includes instructions for setting this up on Mac OSX, Windows, and Linux.</li>

            <li><a href="https://github.com/lmccart/p5.js/wiki/Development">Development</a> - getting started and overview for those that want to contribute to development.</li>

            <li><a href="https://github.com/lmccart/p5.js/tree/master/examples/learningprocessing.">Learning Processing examples</a> - port of the first 10 chapters of examples from Dan Shiffman's <a href="http://www.learningprocessing.com/examples/">Learning Processing book</a>.</li>

            <li><a href="http://risd-creative-programming.github.io/fa13-introtocreativeprogramming/examples.html">RISD class examples</a> - examples covering basics of programming with p5.js used in RISD Intro Creative Programming class.</li>
        </ul>

    </section>
    <?php include('../footer.php'); ?>
    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    </div><!-- end id="container"  -->

    <object type="image/svg+xml" data="img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>


    <?php include('../end.php'); ?>
  </body>
</html>