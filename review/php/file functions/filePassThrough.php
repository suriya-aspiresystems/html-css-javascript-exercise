<?php
$myFile = fopen('file.txt', 'rb');
//Reads first line
fgets($myFile);

echo fpassthru($myFile);
fclose($myFile);