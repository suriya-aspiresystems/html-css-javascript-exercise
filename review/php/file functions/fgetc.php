<?php

// file is opened using fopen() function
$my_file = fopen("file.txt", "rw");

// Prints a single character from the
// opened file pointer
echo fgetc($my_file);

// file is closed using fclose() function
fclose($my_file);

?>