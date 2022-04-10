<?php
$myfile = "file.txt";

// checking whether the file is writable or not
if(is_writable($myfile))
{
    echo ("$myfile file is writable!");
}
else
{
    echo ("$myfile file is not writable!");
}
?>