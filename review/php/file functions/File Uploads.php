<?php
// PHP program to illustrate is_uploaded_file() function.
$file = "file.txt";

// checking whether the file is uploaded via HTTP POST
if (is_uploaded_file($file))
    echo ("$file is uploaded via HTTP POST");
else
    echo ("$file is not uploaded via HTTP POST");
?>