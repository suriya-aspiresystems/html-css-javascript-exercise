<?php
$file = fopen("somefile.txt","r");
// Read first line
echo fgets($file);
// Move back to beginning of file
fseek($file,1);
fclose($file);
?>