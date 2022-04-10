<?php
$file_pointer = 'file.txt';
if(file_exists($file_pointer)=='true'){
    echo "File Exists";
}
else{
    echo "File Does not exists";
}