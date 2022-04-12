<?php  
$quantity = 1;  
$language = 'sprintf';  
$format = 'This is the  %dst example of the %s function.';  
$res = sprintf($format, $quantity, $language);  
echo $res;  
  
echo '</br>';  
  
echo sprintf("this function works with echo.");  
?>  
