
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
  } else if (strpos($path, "contribute") !== false || strpos($path, "contributors-conference") !== false) {
    $tagline = "Processing community times JavaScript community";
  } else {
    $tagline = "the power of Processing times the reach of JavaScript";
  }

?>

<?php include('heading.php'); ?>

<!-- site navigation -->
<div class="column-span">
<ul id="menu">
</ul>
<br />
</div>

<script src="<?php echo getRoot(); ?>js/scroll.js"></script>
