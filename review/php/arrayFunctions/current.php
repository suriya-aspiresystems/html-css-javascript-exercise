<?php
$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport);
$mode = next($transport);    
$mode = current($transport);
echo $mode;
?>
