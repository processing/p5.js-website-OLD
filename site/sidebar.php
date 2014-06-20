
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<?php

  $tagline;
  $path = getcwd();

  if (strpos($path, "getting") !== false) {
    $tagline = "the simplicity of Processing times the flexibility of JavaScript";
  } else if (strpos($path, "reference") !== false) {
    $tagline = "the intuition of Processing times the extensibility of JavaScript";
  } else if (strpos($path, "learning") !== false) {
    $tagline = "the creativity of Processing times the dynamism of JavaScript";
  } else if (strpos($path, "development") !== false) {
    $tagline = "the community of Processing times the community of JavaScript";
  } else {
    $tagline = "the power of Processing times the reach of JavaScript";
  }

?>

<div id="family">
  <p><a href="http://processing.org">Processing</a> <a class="here" href="<?php echo getRoot(); ?>">p5.js</a></p> 
</div>    

<div id="container">
<!-- identity -->
<div id="lockup">
  <a href="<?php echo getRoot(); ?>"><span>
    <object type="image/svg+xml" data="<?php echo getRoot(); ?>img/p5js.svg" class="logo">
     p5js logo <!-- to do: add fallback image in CSS -->
    </object></span>
  </a>
  <p><?php echo $tagline; ?></p>
</div>

<!-- site navigation -->
<div class="column-span">
<ul id="menu">
  <li><a href="<?php echo getRoot(); ?>">Home</a></li>
  <li><a href="<?php echo getRoot(); ?>about/">About</a></li>
  <li><a href="<?php echo getRoot(); ?>getting-started/">Getting&nbsp;started</a></li>
  <li><a href="http://p5js.org/reference/">Reference</a></li>
  <li><a href="<?php echo getRoot(); ?>learning/">Learning</a></li>
  <li><a href="<?php echo getRoot(); ?>development/">Development</a></li>
  <li><a href="#" target=_blank class="other-link">Download</a></li> 
  <li><a href="http://github.com/lmccart/p5.js" target=_blank class="other-link">Github</a></li>
</ul>
<br />
</div>
