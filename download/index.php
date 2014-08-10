<!DOCTYPE html>

<?php $version = "80"; ?>  <?php include('../header.php'); ?>
  <body id="download-page">

    <?php include('../sidebar.php'); ?>
    <?php include('version.php'); ?>
    <!-- content sections -->
    <div class="column-span">
      <section id="about">
        <h2>Download</h2>
        <h3>Complete Library</h3>

        <div class="link_group">
        <a href="https://github.com/lmccart/p5.js/releases/download/<?php echo $version; ?>/p5.zip">
        <div class="download_box">
        <h4>p5.js complete</h4>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
        <path stroke-miterlimit="10" d="M16.909,10.259l8.533-2.576l1.676,5.156l-8.498,2.899l5.275,7.48
            l-4.447,3.225l-5.553-7.348L8.487,26.25l-4.318-3.289l5.275-7.223L0.88,12.647l1.678-5.16l8.598,2.771V1.364h5.754V10.259z"/>
        </svg>
        <p>Includes:<br>p5.js, p5.dom.js, p5.sound.js, and an example project
        <br>Version <?php echo $version; ?> (<?php echo $date; ?>)</p>
        </div>
        </a>
        <div class="spacer"></div>
        </div>


        <div class="link_group">
        <h3>Single Files</h3>
        <a href="https://github.com/lmccart/p5.js/releases/download/<?php echo $version; ?>/p5.js">
        <div class="download_box half_box">
        <h4>p5.js</h4>
        <p>Single file:<br>Full uncompressed version</p>
        </div>
        </a>

        <a href="https://github.com/lmccart/p5.js/releases/download/<?php echo $version; ?>/p5.min.js">
        <div class="download_box half_box">
        <h4>p5.min.js</h4>
        <p>Single file:<br>Compressed version</p>
        </div>
        </a>

        <a href="http://www.jsdelivr.com/#!p5.js">
        <div class="download_box half_box">
        <h4>CDN</h4>
        <p>Link:<br>Statically hosted file</p>
        </div>
        </a>
        <div class="spacer"></div>

        </div>

  
        <div class="link_group">
        <a name="editor" class="anchor"><h3>Editor</h3></a>
        <p>The p5.js editor is currently in development, try out an alpha version of it now. Help out by posting
        <a href="https://github.com/antiboredom/jside/issues">feedback and bugs</a>. Support for Windows and Linux
        coming soon, along with more <a href="https://github.com/antiboredom/jside/labels/enhancement">features</a>.</p>
        <a href="https://github.com/antiboredom/jside/releases/download/v<?php echo $jside_version; ?>/p5.zip">
        <div class="download_box half_box">
        <h4>Mac OS X</h4>
        <p>p5 Editor<br>Version <?php echo $jside_version; ?></p>
        </div>
        </a>

        <!--
        <a href="https://github.com/antiboredom/jside/releases/download/<?php echo $jside_version; ?>/p5.zip">
        <div class="download_box half_box">
        <h4>Windows</h4>
        <p>p5 Development Environment</p>
        </div>
        </a>

        <a href="https://github.com/antiboredom/jside/releases/download/<?php echo $jside_version; ?>/p5.zip">
        <div class="download_box half_box">
        <h4>Linux</h4>
        <p>p5 Development Environment</p>
        </div>
        </a>
        -->
        <div class="spacer"></div>
        </div>
      
        <div class="link_group">
        <h3>ETC</h3>
        <p>Older releases <a href="https://github.com/lmccart/p5.js/releases">p5</a>, <a href="https://github.com/antiboredom/jside/releases">editor</a><br>
        Github <a href="https://github.com/lmccart/p5.js">p5</a>, <a href="https://github.com/antiboredom/jside">editor</a><br>
        Report bugs <a href="https://github.com/lmccart/p5.js/issues">p5</a>, <a href="https://github.com/antiboredom/jside/issues">editor</a><br>
        Supported browsers <a href="https://github.com/lmccart/p5.js/wiki/Supported-browsers">editor</a></p>
        </a>

        <!--
        <a href="https://github.com/antiboredom/jside/releases/download/<?php echo $jside_version; ?>/jside.zip">
        <div class="download_box half_box">
        <h4>Windows</h4>
        <p>p5 Development Environment</p>
        </div>
        </a>

        <a href="https://github.com/antiboredom/jside/releases/download/<?php echo $jside_version; ?>/jside.zip">
        <div class="download_box half_box">
        <h4>Linux</h4>
        <p>p5 Development Environment</p>
        </div>
        </a>
        -->
        <div class="spacer"></div>
        </div>
      </section>

      <?php include('../footer.php'); ?>
    </div><!-- end column-span -->

    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    <object type="image/svg+xml" data="../img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>


    <?php include('../end.php'); ?>
  </body>
</html>