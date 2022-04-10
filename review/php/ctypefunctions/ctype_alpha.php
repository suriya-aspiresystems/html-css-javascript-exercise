<?php
// Your code here!
function alphabet($string){
    foreach ($string as $testString){
        if(ctype_alpha($testString)){
            echo "The String $testString is Valid";
        }
        else {
            echo "Invalid";
        }
    }
}
echo "Result is: ";
$string = array('AbCdzyZ', 'foo!#$bar');
echo alphabet($string);
?>
