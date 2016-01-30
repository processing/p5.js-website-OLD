<?php

function getRoot() {

  if (strlen(getenv('PHP_P5_SITE_ROOT')) > 0) {
    return getenv('PHP_P5_SITE_ROOT');
  }
  if (strpos(getenv('HTTP_HOST'), 'localhost') !== FALSE){
    return 'http://'.getenv('HTTP_HOST').'/p5js.org/';
  } else return 'http://p5js.org/';
}

?>
