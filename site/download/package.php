<?php

$version = null;
$date = null;

// get version if not already set (for index)
if (!$version) {
  $v = getVersion('./builds/latest/p5.js', $version, $date);
  $version = $v[0];
  $date = $v[1];
}

function download($url, $path)
{
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
  return [$v, $d];
  fclose($handle);
}

function updateVersions() {
  echo 'update versions';
  if (file_exists('./builds/latest')) {

    // get last version
    $v = getVersion('./builds/latest/p5.js')[0];

    // rename latest folder
    rename('./builds/latest/', './builds/'.$v);
  }

  // download new files
  mkdir('./builds/latest');
  $r = 'https://raw.githubusercontent.com/lmccart/p5.js/master/';
  download($r.'lib/p5.js', './builds/latest/p5.js');
  download($r.'lib/p5.min.js', './builds/latest/p5.min.js');
  download($r.'lib/addons/p5.dom.js', './builds/latest/p5.dom.js');
  download($r.'lib/addons/p5.sound.js', './builds/latest/p5.sound.js');

  // create zip file
  $zip = new ZipArchive();
  $filename = "p5.zip";

  if ($zip->open('./builds/latest/'.$filename, ZipArchive::CREATE)!==TRUE) {
      exit("cannot open <$filename>\n");
  }

  $zip->addFile('./builds/latest/p5.js','p5.js');
  $zip->addFile('./builds/latest/p5.min.js','p5.min.js');
  $zip->addFile('./builds/latest/p5.dom.js','p5.dom.js');
  $zip->addFile('./builds/latest/p5.sound.js','p5.sound.js');
  $zip->addEmptyDir('empty-example/');
  $zip->addFile('./empty-example/index.html','empty-example/index.html');
  $zip->addFile('./empty-example/sketch.js','empty-example/sketch.js');
  $zip->close();
}

if ($_GET['f'] == 'updateVersions') {
  updateVersions();
}
