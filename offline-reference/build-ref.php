<?php

function rmdir_recursive($dir) {
  foreach(scandir($dir) as $file) {
    if ('.' === $file || '..' === $file) continue;
    if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
    else unlink("$dir/$file");
  }
  rmdir($dir);
}

function zipDir($dir, $dst) {
    // Get real path for our folder
  $rootPath = realpath($dir);

  // Initialize archive object
  $zip = new ZipArchive();
  $zip->open($dst, ZipArchive::CREATE | ZipArchive::OVERWRITE);

  // Create recursive directory iterator
  /** @var SplFileInfo[] $files */
  $files = new RecursiveIteratorIterator(
      new RecursiveDirectoryIterator($rootPath),
      RecursiveIteratorIterator::LEAVES_ONLY
  );

  foreach ($files as $name => $file)
  {
      // Skip directories (they would be added automatically)
      if (!$file->isDir())
      {
          // Get real and relative path for current file
          $filePath = $file->getRealPath();
          $relativePath = substr($filePath, strlen($rootPath) + 1);

          // Add current file to archive
          $zip->addFile($filePath, $relativePath);
      }
  }

  // Zip archive will be created only after closing object
  $zip->close();
  echo $dst.' created<br>';
}

function copyDir($src, $dst) {
  if (!file_exists($dst)) {
    mkdir($dst);
  }

  foreach (
   $iterator = new \RecursiveIteratorIterator(
    new \RecursiveDirectoryIterator($src, \RecursiveDirectoryIterator::SKIP_DOTS),
    \RecursiveIteratorIterator::SELF_FIRST) as $item
  ) {
    if ($item->isDir()) {
      $new_dir = $dst . DIRECTORY_SEPARATOR . $iterator->getSubPathName();
      if (!file_exists($new_dir)) {
        mkdir($new_dir);
      }
    } else {
      copy($item, $dst . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
    }
  }
}

function copyFiles() {
  rmdir_recursive('copy');
  mkdir('copy');

  copyDir('../reference/assets/', 'copy/assets/');
  copyDir('../js/', 'copy/js/');
  copyDir('../css/', 'copy/css/');
  copyDir('extra/', 'copy/');
  copy('../js/p5.min.js', 'copy/js/p5.min.js');
  copy('../js/p5.dom.min.js', 'copy/js/p5.dom.min.js');
  copy('../js/p5.sound.min.js', 'copy/js/p5.sound.min.js');
  echo 'reference files copied<br>';
}

function buildData() {

  $path = '../reference/data.json';
  $file = fopen($path,'r');
  $content = fread($file,filesize($path));
  $content = 'referenceData = '.$content;
  fclose($file);

  $output = fopen('copy/js/data.js','w');
  fwrite($output, $content);
  fclose($output);
  echo 'reference data built<br>';

}

copyFiles();
buildData();
zipDir('copy', 'p5-reference.zip');

?>
