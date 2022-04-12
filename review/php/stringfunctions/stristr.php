<?php   
$string = "Welcome to Aspire";  
    $search1 = "a";  
    echo stristr($string, $search1);  
      
    echo '</br>';  
    $search2 = "ASPIRE";         //case-insensitive  
    echo stristr($string, $search2);  
      
    echo '</br>';  
    echo stristr($string, "WELcoME");  
?>
