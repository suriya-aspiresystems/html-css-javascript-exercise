<?php
$my_file = fopen("file.txt" ,"rw");
echo fgetss($my_file);
//fgetss removed in php 8.0
fclose($my_file);