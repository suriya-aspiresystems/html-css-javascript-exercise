<?php
$String = "I'll \"wake\" early <b>in the</b> morning";

$entities = htmlentities($String);
$decode = html_entity_decode($entities);

echo $entities;
echo "<br>";
echo $decode;