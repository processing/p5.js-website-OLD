
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php

  $tagline;
  $path = getcwd();

  if (strpos($path, "download") !== false) {
    $tagline = "Processing fun times JavaScript quirkiness";
  } else if (strpos($path, "get") !== false) {
    $tagline = "Processing simplicity times JavaScript flexibility";
  } else if (strpos($path, "reference") !== false || strpos($path, "libraries") !== false) {
    $tagline = "Processing intuition times JavaScript power";
  } else if (strpos($path, "learn") !== false) {
    $tagline = "Processing creativity times JavaScript dynamism";
  } else if (strpos($path, "contribute") !== false) {
    $tagline = "Processing community times JavaScript community";
  } else {
    $tagline = "the power of Processing times the reach of JavaScript";
  }

?>

<?php include('heading.php'); ?>

<!-- site navigation -->
<div class="column-span">
<ul id="menu">
  <li><a href="<?php echo getRoot(); ?>">Home</a></li>

  <li><a href="<?php echo getRoot(); ?>download/">Download</a></li> 
    <li><a href="<?php echo getRoot(); ?>gallery/">Gallery</a></li>
  <li><a href="<?php echo getRoot(); ?>reference/">Reference</a></li>
  <li><a href="<?php echo getRoot(); ?>libraries/">Libraries</a></li>
  <li><a href="<?php echo getRoot(); ?>tutorials/">Tutorials</a></li>
  <li><a href="<?php echo getRoot(); ?>examples/">Examples</a></li>

  <li><a href="<?php echo getRoot(); ?>contribute/">Contribute</a></li>
  <li><a href="http://forum.processing.org/two/" target=_blank class="other-link">Forum</a></li>
  <li><a href="http://github.com/processing/p5.js" target=_blank class="other-link">Github</a></li>
  <li><a href="http://twitter.com/p5xjs" target=_blank class="other-link">Twitter</a></li>
</ul>
<br />
</div>

<script src="<?php echo getRoot(); ?>js/scroll.js"></script>
