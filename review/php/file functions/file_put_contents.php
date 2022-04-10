<?php
$filePointer = 'file.txt';
$open = file_get_contents($filePointer);

$open = "Suriya Narayan";
echo $open;
$change = file_put_contents($filePointer,$open);
//return the file's added content and length
echo $change;