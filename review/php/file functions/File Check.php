<?php
$myFile = 'file.txt';

// checking whether the file is a
// regular file or not
if (is_file($myFile)) {
    echo ("$myFile: regular file!");
} else {
    echo ("$myFile: not a regular file!");
}

?>
