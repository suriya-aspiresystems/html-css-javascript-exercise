<?php  
    $str1 = "Hi everyone! Welcome to javaTpoint";  
    $del =  "e";  
    //first call of strtok() function  
    $token = strtok($str1, $del);  
    //first call of strtok() function  
    while($token !==false)   
    {  
        echo $token. "\n";  
        $token =strtok($del);  
    }  
?>
