<!DOCTYPE html>
<head>
  <!-- this line removes any default padding and style. you might only need one of these values set. -->
  <style> body {padding: 0; margin: 0;} </style>
  <script src="../../js/p5.min.js"></script>
  <script src="assets/mouse_1.js"></script>
  <script src="assets/mouse_2.js"></script>
  <script src="assets/mouse_3.js"></script>
  <script src="./invert_mouse.js"></script>
  <script src="./prev_mouse.js"></script>
  <script src="./region_1.js"></script>
  <script src="./region_2.js"></script>
  <script src="./and.js"></script>
  <script src="./corners.js"></script>
  <script src="./pressed_1.js"></script>
  <script src="./pressed_2.js"></script>
  <script src="./pressed_3.js"></script>
  <script src="./key_1.js"></script>
  <script src="./key_2.js"></script>
  <script src="./key_var.js"></script>
  <script src="./key_eq_a.js"></script>
  <script src="./key_code_1.js"></script>
  <script src="./key_code_2.js"></script>
  <script src="./coded_keys.js"></script>
  <script src="./mouse_pressed.js"></script>
  <script src="./mouse_released.js"></script>
  <script src="./mouse_boxes.js"></script>
  <script src="./moved_dragged.js"></script>
  <script src="./draw_t.js"></script>
  <script src="./draw_t_2.js"></script>
  <script src="./event_1.js"></script>
  <script src="./event_2.js"></script>
  <script src="./cursor_1.js"></script>
  <script src="./cursor_2.js"></script>
  <script src="./cursor_3.js"></script>
</head>
<?php include('../../header.php'); ?>
<body id="interactivity-page">

  <?php include('../../sidebar.php'); ?>
  <?php include('../../download/version.php'); ?>

  <!-- content sections -->
  <div class="column-span">

    <section>

      <h2>Interactivity</h2>

      <div class="attribution">
        This is the Interactivity chapter from the second edition of
        <em>
          <a href="http://mitpress.mit.edu/books/processing-1">Processing: A Programming Handbook for Visual Designers and Artists</a>
        </em> , published by MIT Press. Copyright 2013 MIT Press. This tutorial is for Processing version 2.0+. If you see any errors or have comments, please
        <a href="https://github.com/processing/processing-docs/issues?state=open">let us know</a>. Ported to p5.js by Chris Hallberg and Rebecca Lieberman.
      </div>

      <a class="anchor" href="#file-setup">
        <h3 class = "start-element tutorial-btn" id = "introduction">Introduction</h3></a>
        <div class="info" id="introduction">
          <p>The screen forms a bridge between our bodies and the realm of circuits and electricity inside computers. We control elements on screen through a variety of devices such as touch pads, trackballs, and joysticks, but the keyboard and mouse remain the most common input devices for desktop computers. The computer mouse dates back to the late 1960s, when Douglas Engelbart presented the device as an element of the oN-Line System (NLS), one of the first computer systems with a video display. The mouse concept was further developed at the Xerox Palo Alto Research Center (PARC), but its introduction with the Apple Macintosh in 1984 was the catalyst for its current ubiquity. The design of the mouse has gone through many revisions in the last forty years, but its function has remained the same. In Engelbart's original patent application in 1970 he referred to the mouse as an "X-Y position indicator," and this still accurately, but dryly, defines its contemporary use.</p>
          <p>The physical mouse object is used to control the position of the cursor on screen and to select interface elements. The cursor position is read by computer programs as two numbers, the x-coordinate and the y-coordinate. These numbers can be used to control attributes of elements on screen. If these coordinates are collected and analyzed, they can be used to extract higher-level information such as the speed and direction of the mouse. This data can in turn be used for gesture and pattern recognition.</p>
          <p>Keyboards are typically used to input characters for composing documents, email, and instant messages, but the keyboard has potential for use beyond its original intent. The migration of the keyboard from typewriter to computer expanded its function to enable launching software, moving through the menus of software applications, and navigating 3D environments in games. When writing your own software, you have the freedom to use the keyboard data any way you wish. For example, basic information such as the speed and rhythm of the fingers can be determined by the rate at which keys are pressed. This information could control the speed of an event or the quality of motion. It's also possible to ignore the characters printed on the keyboard itself and use the location of each key relative to the keyboard grid as a numeric position.</p>
          <p>The modern computer keyboard is a direct descendant of the typewriter. The position of the keys on an English-language keyboard is inherited from early typewriters. This layout is called QWERTY because of the order of the top row of letter keys. It was developed for typewriters to put physical distance between frequently typed letter pairs, helping reduce the likelihood of the typebars colliding and jamming as they hit the ribbon. This more than one-hundred-year-old mechanical legacy still affects how we write software today.</p>

          <a name="1" class="anchor"><h3 class = "start-element tutorial-btn" id = "Mouse Data">Mouse Data</h3></a>
          <div class="info" id = "Mouse Data">
            <p>The Processing variables mouseX and mouseY (note the capital X and Y) store the x-coordinate and y-coordinate of the cursor relative to the origin in the upper-left corner of the display window. To see the actual values produced while moving the mouse, run this program to print the values to the console:</p>
            <pre><code class="language-javascript">
              function draw() {
                frameRate(12);
                println(mouseX + " : " + mouseY);
              }
            </code></pre>
            <p>When a program starts, the mouseX and mouseY values are 0. If the cursor moves into the display window, the values are set to the current position of the cursor. If the cursor is at the left, the mouseX value is 0 and the value increases as the cursor moves to the right. If the cursor is at the top, the mouseY value is 0 and the value increases as the cursor moves down. If mouseX and mouseY are used in programs without a draw() or if noLoop() is run in setup(), the values will always be 0.</p>
            <p>The mouse position is most commonly used to control the location of visual elements on screen. More interesting relations are created when the visual elements relate differently to the mouse values, rather than simply mimicking the current position. Adding and subtracting values from the mouse position creates relationships that remain constant, while multiplying and dividing these values creates changing visual relationships between the mouse position and the elements on the screen. In the first of the following examples, the circle is directly mapped to the cursor, in the second, numbers are added and subtracted from the cursor position to create offsets, and in the third, multiplication and division are used to scale the offsets.</p>
            <div class="row">
              <div class="three col">
                <div id="mouse_1"></div>
              </div>
              <div class="ten col">
                <pre>
                  function setup() {
                    createCanvas(100, 100);
                    noStroke();
                  }

                  function draw() {
                    background(126);
                    ellipse(mouseX, mouseY, 33, 33);
                  }
                </pre>
              </div>
            </div>
            <div class="row">
              <div class="three col">
                <div id="mouse_2"></div>
              </div>
              <div class="nine col">
                <pre>
                  function setup() {
                    createCanvas(100, 100);
                    noStroke();
                  }

                  function draw() {
                    background(126);
                    ellipse(mouseX, 16, 33, 33); // Top circle
                    ellipse(mouseX+20, 50, 33, 33); // Middle circle
                    ellipse(mouseX-20, 84, 33, 33); // Bottom circle
                  }
                </pre>
              </div>
            </div>
            <div class="row">
              <div class="three col">
                <div id="mouse_3"></div>
              </div>
              <div class="nine col">
                <pre>
                  function setup() {
                    createCanvas(100, 100);
                    noStroke();
                  }

                  function draw() {
                    background(126);
                    ellipse(mouseX, 16, 33, 33); // Top circle
                    ellipse(mouseX/2, 50, 33, 33); // Middle circle
                    ellipse(mouseX*2, 84, 33, 33); // Bottom circle
                  }
                </pre>
              </div>
            </div>

          </div>
          <a name="2" class="anchor"><h3 class = "start-element tutorial-btn" id = "sin">Using Sin and Cosine </h3></a>
          <div class = "info" id = "Sin Cos Curves">

            <p>

              <iframe src="assets/sincoscurves/embed.html" width="800px" height="750px"></iframe>
            </p>
          </div>


          <?php include('../footer.php'); ?>
          <!-- outside of column for footer to go across both -->

          <p class="clearfix"> &nbsp; </p>

        </div><!-- end id="container"  -->

        <object type="image/svg+xml" data="../../img/thick-asterisk-alone.svg" id="asterisk-design-element">
          *<!-- to do: add fallback image in CSS -->
        </object>


        <?php include('../../end.php'); ?>
      </body>
      </html>
