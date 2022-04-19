<?php
$str = 'To do or not to do';
$position = strpos($str, 'To');

if ($position) {
    echo $position;
} else {
    echo 'Not found';
}