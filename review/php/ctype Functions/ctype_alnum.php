<?php
function alphaNumeric($string){
   foreach ($string as $testCase){
       if(ctype_alnum($testCase)){
           echo "The given $testCase contains all the letters and digits";
       }
       else{
           echo "Invalid";
       }
   }
}
$strings= array("AbcdE1234","foo%@%");
echo alphaNumeric($strings);