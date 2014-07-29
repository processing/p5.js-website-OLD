
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php

  $tagline;
  $path = getcwd();

  if (strpos($path, "download") !== false) {
    $tagline = "the fun of Processing times the quirkiness of JavaScript";
  } else if (strpos($path, "get") !== false) {
    $tagline = "the simplicity of Processing times the flexibility of JavaScript";
  } else if (strpos($path, "reference") !== false || strpos($path, "libraries") !== false) {
    $tagline = "the intuition of Processing times the extensibility of JavaScript";
  } else if (strpos($path, "learn") !== false) {
    $tagline = "the creativity of Processing times the dynamism of JavaScript";
  } else if (strpos($path, "contribute") !== false) {
    $tagline = "the community of Processing times the community of JavaScript";
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
  <li><a href="<?php echo getRoot(); ?>get-started/">Get&nbsp;Started</a></li>
  <li><a href="<?php echo getRoot(); ?>reference/">Reference</a></li>
  <li><a href="<?php echo getRoot(); ?>libraries/">Libraries</a></li>
  <li><a href="<?php echo getRoot(); ?>learn/">Learn</a></li>
  <li><a href="<?php echo getRoot(); ?>contribute/">Contribute</a></li>
  <li><a href="http://github.com/lmccart/p5.js" target=_blank class="other-link">Github</a></li>
</ul>
<br />
</div>

<script src="<?php echo getRoot(); ?>js/scroll.js"></script>
