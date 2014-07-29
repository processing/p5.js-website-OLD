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
        <a href="https://github.com/lmccart/p5.js/releases/download/<?php echo $version; ?>/p5.js.zip">
        <div class="download_box">
        <h4>p5.js complete</h4>
        <object type="image/svg+xml" data="../img/thick-asterisk-alone.svg">
         *<!-- to do: add fallback image in CSS -->
        </object>
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

        <a href="http://cdnjs.com/libraries/p5.js">
        <div class="download_box half_box">
        <h4>CDN</h4>
        <p>Link:<br>Statically hosted file</p>
        </div>
        </a>
        <div class="spacer"></div>

        </div>

  
        <div class="link_group">
        <h3>IDE</h3>
        <a href="https://github.com/antiboredom/jside/releases/download/<?php echo $jside_version; ?>/jside.zip">
        <div class="download_box half_box">
        <h4>Mac OS X</h4>
        <p>p5 Development Environment</p>
        </div>
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
        <div class="spacer"></div>
        -->
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