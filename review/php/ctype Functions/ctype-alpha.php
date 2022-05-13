<?php
function alphabets($string){
    foreach ($string as $testCase){
        if(ctype_alpha($testCase)){
            echo "The given $testCase contains all the letters and digits";
            echo "<br>";
        }
        else{
            echo "Invalid";
        }
    }
}
$strings= array("AbcdE1234","foo%@%");
echo alphabets($strings);