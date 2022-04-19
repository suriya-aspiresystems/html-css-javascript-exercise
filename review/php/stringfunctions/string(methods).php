<?php
echo strlen("Hello GeeksforGeeks!");
echo "<br>";
echo strrev("Hello GeeksforGeeks!");
echo "<br>";
echo str_replace("Geeks", "World", "Hello GeeksforGeeks!");
echo "<br>";
echo strpos("Hello GeeksforGeeks!", "Geeks");
echo "<br>";
echo trim("Hello World!", "Hed!");
echo "<br>";
$input  = "WELCOME TO GEEKSFORGEEKS";

echo strtolower($input);
echo "<br>";
$string1  = "Welcome to GeeksforGeeks";

echo str_word_count($string1);
echo "<br>";
$string2  = "Welcome to geeksforgeeks";

echo(substr($string2,3));
$rest = substr("abcdef", -3, -1); // returns "de"
echo $rest;