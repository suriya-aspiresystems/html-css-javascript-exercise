<?php
$string1 = "Hello Suriya";
$string2 = "Hello Muthu";
if(strncasecmp($string1,$string2,5)==0){
    echo "First 5 characters of $string1 and $string2 are equals in a case-insensitive manner";

}