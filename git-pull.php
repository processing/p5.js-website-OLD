<?php
echo system('git checkout -- .');
echo system('git pull git://github.com/lmccart/p5js.org.git master');
echo system('"test" > updated.php');
?>
