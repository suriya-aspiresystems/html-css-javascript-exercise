<?php

// target file
$targetfile = 'file.txt';

// name of the link
$linkname = 'Hello';

// creating a symbolic link for the target file
if(!link($targetfile, $linkname))
{
    echo('Link has been created!');
}
else
{
    echo('Link cannot be created!');
}
?>