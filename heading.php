
<div id="family">
  <p class="left"><a href="http://processing.org">Processing</a>
     <a class="here" href="<?php echo getRoot(); ?>">p5.js</a>
     <a href="http://py.processing.org/">Processing.py</a>
  </p>
   <form onSubmit="return validate(this);" style='pointer-events:all;' name="search" method="get" action="http://www.google.com/search">
    <input type="hidden" name="as_sitesearch" value="p5js.org" />
    <input id="search_field" type="text" name="as_q" value="" size="20" class="text" />
    <input id="search_button" type="submit" value=" " />
  </form>

<script type='text/javascript'>
   function validate(theForm)
   {
    var valid = true;
    var textbox = document.getElementById("search_field");

       if (textbox.value.trim()) {
         textbox.setAttribute("class", "valid");
        
       } else {
         textbox.setAttribute("class", "invalid");
         valid = false;
         textbox.placeholder = "Fill this Field";
         alert('Search Box is empty..Please enter some text');
         
       }
         return valid;
}
</script>
  <p class="right">
    <a href="https://processingfoundation.org/">Processing Foundation</a>
  </p>
</div>

<div id="container">
<!-- identity -->
<div id="lockup">
  <a href="<?php echo getRoot(); ?>">
  <img type="image/svg+xml" src="<?php echo getRoot(); ?>img/p5js-beta.svg" id="logo_image" class="logo" />
  <div id="p5_logo"></div>
  </a>
  <?php if (isset($tagline)) { echo '<p>'.$tagline.'</p>'; } ?>
</div>
