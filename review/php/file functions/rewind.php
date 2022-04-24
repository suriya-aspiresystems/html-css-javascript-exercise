<?php
  
$myfile = fopen("gfg.txt", "r");
  

fseek($myfile, "10");
  

rewind($myfile);
  
// closing the file
fclose($file);
  
?>
