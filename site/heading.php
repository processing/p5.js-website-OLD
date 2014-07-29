
<div id="family">
  <p><a href="http://processing.org">Processing</a> <a class="here" href="<?php echo getRoot(); ?>">p5.js</a></p> 
  <form name="search" method="get" action="http://www.google.com/search">
    <input type="hidden" name="as_sitesearch" value="p5js.org" />
    <input id="search_field" type="text" name="as_q" value="" size="20" class="text" />
    <input id="search_button" type="submit" value=" " />
  </form>
</div>    

<div id="container">
<!-- identity -->
<div id="lockup">
  <a href="<?php echo getRoot(); ?>">
    <img type="image/svg+xml" src="<?php echo getRoot(); ?>img/p5js-beta.svg" class="logo" />
  </a>
  <?php if ($tagline) { echo '<p>'.$tagline.'</p>'; } ?>
</div>