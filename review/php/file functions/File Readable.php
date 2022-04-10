<?php
$myfile = 'file.txt';

// checking whether file is readable or not
if (is_readable($myfile))
{
    echo '$myfile is readable';
}
else
{
    echo '$myfile is not readable';
}
?>