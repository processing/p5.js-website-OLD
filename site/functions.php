<?php

function getRoot() {
  if (getenv('HTTP_HOST') == 'localhost') {
    return 'http://localhost/p5js.org/site/';
  } else return 'http://p5js.org/site/';
}

?>