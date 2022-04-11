<?php  
$number = 9;  
$str = "javatpoint";  
$file = fopen("test.txt","w");  
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);  
?>  
