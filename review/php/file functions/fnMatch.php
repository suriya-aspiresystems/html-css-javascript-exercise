<?php
$check = 'file.txt';

if (fnmatch("*[f]*",$check)){
    echo "file";
}
else{
    echo "match not found";
}