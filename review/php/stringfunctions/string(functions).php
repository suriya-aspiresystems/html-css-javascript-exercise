<?php
echo strtolower("SURIYA");
echo "<br>";
echo strtoupper("suriya");
echo "<br>";
echo str_contains("suriya","suri");
echo "<br>";
echo ucfirst("Suriya Narayan");
echo "<br>";
echo ucwords("suriya narayan");
echo "<br>";
echo lcfirst("Suriya Narayan");
echo "<br>";
echo strlen("Suriya");
echo "<br>";
echo strrev("Suriya");
echo "<br>";
echo str_replace("Geeks","World","Geeks for Geeks");
echo "<br>";
echo trim("Hello World","Hed");
echo "<br>";

$str = 'To do or not to do';
$position = strpos($str, 'To');

if ($position) {
    echo $position;
} else {
    echo 'Not found';
}

?>