<?php

function download($url, $path) {
  # open file to write
  $fp = fopen ($path, 'w+');
  # start curl
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, $url );
  # set return transfer to false
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, false );
  curl_setopt( $ch, CURLOPT_BINARYTRANSFER, true );
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
  # increase timeout to download big file
  curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
  # write data to local file
  curl_setopt( $ch, CURLOPT_FILE, $fp );
  # execute curl
  curl_exec( $ch );
  # close curl
  curl_close( $ch );
  # close local file
  fclose( $fp );

  if (filesize($path) > 0) return true;
}

function getVersion($f) {
  $handle = fopen($f, 'r');
  $line = fgets($handle);
  preg_match('/v([^ ]*)/', $line, $matches);
  $v = $matches[1];
  preg_match('/v[^ ]* (.*) \*\//', $line, $matches);
  $d = $matches[1];
  return new Array($v, $d);
  fclose($handle);
}

function updateVersion() {

  $r = 'https://raw.githubusercontent.com/lmccart/p5.js/master/';
  download($r.'lib/p5.min.js', 'p5.min.js');
  $v = getVersion('p5.min.js');
  unlink('p5.min.js');

  $contents = '<?php $version = "'.$v[0].'"; $date = "'.$v[1].'"; ?>';

  file_put_contents('version.php', $contents);
}

if ($_GET['f'] == 'update_version') {
  updateVersion();
}

?>