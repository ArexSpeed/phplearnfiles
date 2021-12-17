<?php

$dir = scandir(__DIR__); // check all directory
var_dump(is_file($dir[2])); //filesystems.php

mkdir('foo'); //create directory foo in files
//mkdir('foo/bar', recursive: true); // create two directory path
rmdir('foo'); // delete dir
if(file_exists('foo.txt')) {
  echo filesize('foo.txt');

  file_put_contents('foo.txt', 'hello word'); //add new content to file
  file_put_contents('foo.txt', 'new info', FILE_APPEND); //add new content without deleteing old text
  clearstatcache();
  echo filesize('foo.txt');
} else {
  echo 'File not found';
}

$file = fopen('foo.txt', 'r'); //open for r-reading
$file = @fopen('foo.txt', 'r'); //open without warning info 

while (($line = fgets($file)) !== false) {
  echo $line . '<br />'; //open line by line like in the file
}

copy('foo.txt', 'bar.txt'); //create the same file
