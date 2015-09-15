<?php

function getRoot() {

  if (strpos(getenv('HTTP_HOST'), 'localhost') !== FALSE){
    return 'http://'.getenv('HTTP_HOST').'/p5js.org/';
  } else return 'http://p5js.org/';
}

?>