<?php
$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);
echo "<br>";
$trimmed = rtrim($text);
var_dump($trimmed);