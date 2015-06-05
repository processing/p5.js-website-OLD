<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="get-started-page">

    <?php include('../../sidebar.php'); ?>
    <?php include('../../download/version.php'); ?>

    <!-- content sections -->
    <div class="column-span">

    <section>

      <h2>Field Guide to Debugging</h2>

     <div class="attribution">
      This tutorial was written during the first p5.js developers conference by Jason Alderman, Tega Brain, Taeyoon Choi and Luisa Pereira.
      </div>
      <p>Hi! Meet everyone!  </p>
      <img src="assets1/everyone.jpg" />
      <p>
This is a field guide for debugging for everyone - whether you are
beginning to code or whether you have been coding for a long time, this guide
breaks down the mysterious process of solving problems. It was made by the Education
Working Group, during the p5.js contributor conference at the Frank-Rytche Studio for
Creative Inquiry, Carnegie Mellon University in May of 2015. The contributors of this
tutorial is Luisa, Jason, Tega, Taeyoon and many more.


      </p>
      <a class="anchor" href="#file-setup"><h3 class = "start-element tutorial-btn" id = "introduction">Debugging is a Creative Act</h3></a>
    <div class="info" id="introduction">
      <p>
        Debugging is major part of the development process in any language. The word 'debugging' describes locating a bug in your program, and figuring out what exactly is going on when the code throws this error. At all levels programmers encounter bugs and will often spend more time debugging than actually programming the application. You can expect to spend a lot
        of time doing this and so it's really important to develop good strategies for identifying and working through bugs as you learn p5.js.
      </p>

      <img class="small_right" img src="assets1/bug3.jpg" />
      <p>As <a target="_blank"
      href="https://vimeo.com/channels/debugging" >Clay Shirky</a> aptly describes, a bug is when "there is a problem with your mental picture of what is happening in your code." Usually there is both an error and a gap in your understanding.</p>
      <p>
      You think you are telling the computer one thing, but it is doing something else. Why?
    </p>

      <a class="anchor" href="#file-setup"><h3 class = "start-element tutorial-btn" id = "remember">Remember...</h3></a>
    <div class="info" id="remember">
      <p>As you program you will be shifting between many roles and perspectives. When designing the scope and process of your application you are an architect, when writing your code you are an engineer, when testing you are a vandal and you have to be a detective when finding your bugs.
      </p>
      <img class="small" img src="assets1/p1.jpg" />
      <img class="small" img src="assets1/p2.jpg" />
      <img class="small" img src="assets1/p3.jpg" />
      <img class="small" img src="assets1/p4.jpg" />

      <a name="1" class="anchor"><h3 class = "start-element tutorial-btn" id = "Don't panic">1. Don't panic. Change perspectives.</h3></a>
      <div class="info" id = "don't panic">
      <p>
        When you encounter a bug that you do not know how to solve, stop, pause and take a deep breath. Stand up, say hi to the dog, take a walk or if it's late go get some sleep. When you are frustrated, tired and upset, you are not in a good frame of mind to learn or solve  a  problem.
      </p>
      <p>
  To find your errors you will need to change perspectives and become the detective. The goal is to find out what the program IS doing, rather than why it's not doing what it's supposed to. We need to get the computer to show us what it's doing.
      </p>
      <p>
      The clues are in the values of variables and flow of program.
    </p>
      </div>

      <a name="2" class="anchor"><h3 class = "start-element tutorial-btn" id = "problem">2. Explain the problem </h3></a>
      <div class = "info" id = "problem">
        <p>
        <img class="small_left" img src="assets1/o1.jpg" />
  Walk someone through the issue even if they themselves do not know how to program. If no one is around, draft an email explaining what you have done and breaking down what the problem is.

    </p>
      <p>
        <img class="small_right" img src="assets1/o2.jpg" />
      You probably won't need to actually send this email as often the act of writing it will help you to locate and identify what you need to do next. Some programmers have even been known to explain their problem to a friendly inanimate object like a rubber ducky.
    </p>
    <p>
      <img class="small_left" img src="assets1/o3.jpg" />
      This is also a good time to add comments to your code that tell you exactly what each of your functions is doing.
      Some coders also print out their code (or a section of it) and go through it line by line, tracing the path of variables and making notes.
    </p>
    <a name="3" class="anchor"><h3 class = "start-element tutorial-btn" id = "change">3. Before you change anything... </h3></a>
    <div class = "info" id = "change">
    <p>      <img class="small_right" img src="assets1/o4.jpg" />
      1) Save a version of your work</br>

      Before doing anything: save a copy of your code that you can go back to.    </p>
    <p>
      <img class="small_left" img src="assets1/o5.jpg" />
      While debugging you are likely to introduce other problems, break things or accidentally delete good work.
      <p>  <img class="small_right" img src="assets1/o6.jpg" />

<br/>
    You don't want to go backwards in the process of debugging.
    </p>
    <p>
      <img class="smaller_right" img src="assets1/o7.jpg" />
    2) Write a list of what you are trying. </br>This will help you to keep track of what you still need to check. Be  methodical, it will save you allot of time in the long run.
  </p>
  <p>
  3) Only ever change one thing at a time.
</p>


      <p>
        <img class="small_left" img src="assets1/o9.jpg" />
        Every time you make a change, test your program. If you make multiple changes  before testing, you will not know which change has what affect and are  likely to break things further.
      </p>

      <a name="4" class="anchor"><h3 class = "start-element tutorial-btn" id = "basics">4. Check the basics </h3></a>
      <div class = "info" id = "basics">
        <p>
          Is everything plugged in?<br/>
        Many bugs end up being very basic mistakes that are equivalent to forgetting to plug in the projector. These mistakes are so obvious they are often invisible. Check the dumb stuff like are you editing the file that you are actually running (and not, for example, editing the local file, and looking at a different file on the server)? Are all of your external files where you think they are? Are your file dependencies correct? Are there any typos in your paths? Check your server?
      </p>
      <p>
      Identify and check any 'Black boxes'.<br/>
      <img class="med_left" img src="assets1/bb1.jpg" />
A black box describes any part of your system you do not understand the inner workings of. For example, a library or perhaps a function that you have not written for yourself.
<img class="small_right" img src="assets1/bb2.jpg" />
Systematically take out each black box one by one and run your program. This will help to see
 if these parts of the program contain the error.
  </p>
      <a name="5" class="anchor"><h3 class = "start-element tutorial-btn" id = "reporting">5. Add error reporting  </h3></a>
      <div class = "info" id = "reporting">
        <p>
        <img class="med_left" img src="assets1/e1.jpg" />

        Error reporting is how your program tells you what it is doing. p5.js comes with some built-in error reporting that will tell you if you have made specific syntax errors. For more details on how to find the browser console's error reporting go here.

      </p>

      <p>
      It is also useful to add in your own error reporting using the console.log() function.

      To check your program flow add in   <img class="small_right" img src="assets1/e2.jpg" />
      console.log() statements to your different functions and parts of your code. Then when you look at your console you can see the order that things happen and where you encounter problems.
    </p>

      <a name="6" class="anchor"><h3 class = "start-element tutorial-btn" id = "help">6. Search for more help </h3></a>
      <div class = "info" id = "help">
        <p>
        So none of this works? There are many places you can look online to get more help.
<ul>
  <li>
    Do a Google search, if you have had this problem chances are many other people will have too.
</li>
<li>
    Search the <a href="http://forum.processing.org/two/">Processing forum</a> using the p5.js tag
  </li><li>
    Search development forums like <a href="http://stackoverflow.com/">Stack Overflow</a>
  </li>
</ul>
  <p>  More general javascript resources.</p>
<ul>
<li>
    First chapter of Bocoup's/Rebecca Murphey's interactive textbook, jQuery Fundamentals: http://jqfundamentals.com/chapter/javascript-basics
  </li><li>
    Mozilla's JavaScript Guide and JavaScript Reference (really helpful for finding all of the built-in methods for, say, a String.)
  </li><li>
    Lauren's course's resources: https://github.com/lmccart/itp-creative-js#js-learning--intro
  </li>
</ul>
      <a name="7" class="anchor"><h3 class = "start-element tutorial-btn" id = "people">7. Ask people </h3></a>
      <div class = "info" id = "people">
        <p>
        Still not working? <br/>
        <img class="med_right" img src="assets1/people.jpg" />
You can also ask people for help! They might be delighted to help you.  <br/>
Send that email you wrote at the start.  <br/>
Post to the Processing forum succinctly articulating your problem and what you want to know. <br/>
</p>

      <a name="8" class="anchor"><h3 class = "start-element tutorial-btn" id = "prevent">8. Good coding practices and how to prevent bugs!</h3></a>
      <div class = "info" id = "prevent">
        <p><img class="image" img src="assets1/practice.jpg" />
          <ul>
          <li>
        Do not optimize prematurely. Clear code is more important than high-performing code as you're building your program.<br/>
      </li><li>
    Do not abstract prematurely. You don't need to make functions for things you think you're going to use multiple times...until you actually have to use it more than once twice. <br/>
  </li><li>
    Start with pseudocode as comments, then add code underneath each step.<br/>
    Put console.log()s in your code as you develop (and test frequently—so if something changes, you know what you did since the last time you tested).<br/>
</li>
</ul>
</p>
<p>
ALSO: start with small problems! Do one thing at a time. It's ok to make smaller sketches to test one thing (draw a star! check twitter!) and then voltron them together into a bigger sketch (draw a star that turns red when you have a notification on twitter!)
  </p>
      <a name="9" class="anchor"><h3 class = "start-element tutorial-btn" id = "help">9. More resources </h3></a>
      <div class = "info" id = "resources">
        <p>
This guide has been inspired by several other fantastic resources on debugging when coding. Some of these are here:
<ul>
<li>
Matt Gemmel, <a href="http://mattgemmell.com/what-have-you-tried/">What have you tried?</a>
</li><li>
Clay Shirky, <a href="https://vimeo.com/channels/debugging">A brief introduction to debugging</a>
</li><li>
Eric Steven Raymond, <a href="http://www.catb.org/esr/faqs/smart-questions.html"> How to ask questions the smart way</a>
</li><li>
ITP Residents, <a href="https://docs.google.com/presentation/d/1RXzITwS4otVKnYkuNu2w7CrpYy35WBO2HUlmkSc2p8g/edit?copiedFromTrash#slide=id.g2ffb36b3_0_44">10 Tips for Debugging</a>
</li><li>
Rurouni Jones, <a href="http://rurounijones.github.io/blog/2009/03/17/how-to-ask-for-help-on-irc//">How to ask for help on IRC</a>
</li></ul>
<img class="med_left" img src="assets1/final.jpg" />
</p>




    <?php include('../footer.php'); ?>
    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    </div><!-- end id="container"  -->

    <object type="image/svg+xml" data="../img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>


    <?php include('../end.php'); ?>
  </body>
</html>
