<?php

// Opening a file in read. mode
$myfile = fopen("file.txt", "r");

// displaying the current position of the pointer in the opened file
echo ftell($myfile);

// changing current position
fseek($myfile, "12");

//displaying current position
echo "<br />" . ftell($myfile);

// closing the file
fclose($myfile);
