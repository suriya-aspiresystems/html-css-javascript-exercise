<<?php

// Copying gfg.txt to geeksforgeeks.txt
$source = 'somefile.txt';
$dest = 'file.txt';

if (!copy($source, $dest)) {
    echo "File cannot be copied! \n";
}
else {
    echo "File has been copied!";
}

?>

