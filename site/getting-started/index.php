<!DOCTYPE html>

  <?php include('../header.php'); ?>
  <body id="getting-started-page">

    <?php include('../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>

      <h2>Getting Started</h2>

      <h3>Download and File Setup</h3>
      <p>
        First, create a new folder that all your files will live inside. Download
        <a href="https://raw.github.com/lmccart/p5.js/master/lib/p5.js" target="_blank">
        <code>p5.js</code></a> and create a new <code>index.html</code> file and a new 
        <code>sketch.js</code> file. <code>sketch.js</code> is where you will write your 
        p5 code and <code>index.html</code> will bring it all together to be displayed on 
        a web page. A full example index.html file looks like so:
      </p>

      <pre><code class="language-markup">&lt;!doctype html>
&lt;html>
&lt;head>
  &lt;script src="p5.js"></script>
  &lt;script src="sketch.js"></script>
&lt;/head>
&lt;body>
&lt;/body>
&lt;/html></code></pre>

      <p>
        Alternatively, you can just download the <a href="#">example project</a> and edit
        that.
      </p>

      <p>
        We should also mention that you can reference the <code>p5.js</code> file hosted 
        online. All versions of <code>p5.js</code> are stored in a CDN ("Content Delivery 
        Network"). You can see a history of these versions here: <a target="_blank"
        href="http://cdnjs.com/libraries/p5.js/" >p5.js CDN</a>. In this case you can 
        simply say:
      </p>

      <pre><code class="language-markup">&lt;script src="http://cdnjs.cloudflare.com/ajax/libs/p5.js/VERSION_NUMBER/p5.min.js">&lt;/script></code></pre>   

      <p>
        For example:
      </p>

      <pre><code class="language-markup">&lt;script src="http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.2.13/p5.min.js">&lt;/script></code></pre>   

      <h3>Environment</h3>

      <p>
        You can use the <a href="http://en.wikipedia.org/wiki/Source_code_editor" 
        target="_blank">code editor</a> of your choice. Instructions for getting set up 
        with <a href="www.sublimetext.com/2" target="_blank"> Sublime Text 2</a> are  
        included below.
      </p>

      <p>
        <ul>
          <li>Open Sublime. Go to the File menu and choose Open... and choose the folder 
          that your html and js files are located in. On the left sidebar, you should now
           see the folder name at the top, with a list of the files contained in the 
           folder directly below.</li>
          <li>Click on your <code>sketch.js</code> file and it will open on the right 
          where you can edit it.
          <img src="<?php echo getRoot(); ?>img/sublime.png" /></li>
          <li>Open a web browser and type <code>localhost/path/to/your/index.html</code> 
          file in the address bar to view your sketch.</li>
        </ul>
      </p>

      <h3>Your First Sketch</h3>

      <p>
        In your editor, type the following:
      </p>

      <pre><code class="language-javascript">function setup() {

}

function draw() {
  ellipse(50, 50, 80, 80);
}</code></pre>  

      <p>
        This line of code means "draw an ellipse, with the center 50 pixels over from the
        left and 50 pixels down from the top, with a width and height of 80 pixels."
      </p>
      <p>
        Refresh your page view in your browser, if you've typed everything correctly, 
        you'll see this appear in the display window: 
      </p>
      <img src="<?php echo getRoot(); ?>img/first_sketch.png" />

      <p>
        If you didn't type it correctly, you might not see anything. If this happens, 
        make sure that you've copied the example code exactly: the numbers should be 
        contained within parentheses and have commas between each of them, and the line 
        should end with a semicolon.
      </p>

      <p>
        One of the most difficult things about getting started with programming is that 
        you have to be very specific about the syntax. The browser isn't always smart 
        enough to know what you mean, and can be quite fussy about the placement of 
        punctuation. You'll get used to it with a little practice. Depending on the 
        browser you are using, you can also see errors by looking at the JavaScript 
        "console". In chrome, for example, this is under View->Developer-JavaScript 
        Console.
      </p>

      <p>
        Next, we'll skip ahead to a sketch that's a little more exciting. Delete the text
         from the last example, and try this:
      </p>

      <pre><code class="language-javascript">function setup() {
  createCanvas(480, 120);
}

function draw() {
  if (mouseIsPressed) {
    fill(0);
  } else {
    fill(255);
  }
  ellipse(mouseX, mouseY, 80, 80);
}</code></pre>  

      <p>
        This program creates a window that is 480 pixels wide and 120 pixels high, and 
        then starts drawing white circles at the position of the mouse. When a mouse 
        button is pressed, the circle color changes to black. We'll explain more about 
        the elements of this program in detail later. For now, run the code, move the 
        mouse, and click to experience it.
      </p>

      <h3>What Next?</h3>
      <p>
        <strong>Getting started for Processing users</strong>. View the 
        <a href="https://github.com/lmccart/p5.js/wiki/Reference" target="_blank">
        Processing syntax conversion</a> tutorial to learn how to convert from Processing
        to p5.js.
      </p>

      <p>
        <strong>Reference</strong>. View the <a href="../reference/">reference</a>.  
      </p>

      <p>
        <strong>Learning</strong>. Check out the <a target="_blank" 
        href="https://github.com/lmccart/p5.js">learning</a> page for more tutorials and
        examples.
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