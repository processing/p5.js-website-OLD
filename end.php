<!--scripts before close of body element -->

<!-- prism for code highlighting -->
<script src="<?php echo getRoot(); ?>js/vendor/prism.js"></script>

<!-- boilerplate suggestions
<script src="js/plugins.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/<?php echo $version; ?>/p5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/<?php echo $version; ?>/addons/p5.dom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/<?php echo $version; ?>/addons/p5.sound.js"></script>
<script src="<?php echo getRoot(); ?>js/render.js"></script>
<script src="<?php echo getRoot(); ?>js/main.js"></script>
<script src="<?php echo getRoot(); ?>js/logo.js"></script>
<script>
<!--renderCode('bg_code');-->
renderCode();
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53383000-1', 'auto');
  ga('send', 'pageview');

</script>
</div> <!-- end container -->


