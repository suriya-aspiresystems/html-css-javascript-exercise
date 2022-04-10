<?php
// checking filesize before truncating
echo filesize("file.txt");

// Opening the file
$file = fopen("file.txt", "r+");

// truncating the file
ftruncate($file, 10);

// closing the file
fclose($file);

// Clearing cache and checking filesize again
clearstatcache();
echo filesize("file.txt");

// closing the file
fclose($file);
?>