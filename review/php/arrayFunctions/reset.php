<?php

$array = array('step one', 'step two', 'step three', 'step four');

// by default, the pointer is on the first element
echo current($array) . "<br />\n"; 

// skip two steps
next($array);
next($array);
echo current($array) . "<br />\n";

// reset pointer, start again on step one
reset($array);
echo current($array) . "<br />\n"; 

?>
