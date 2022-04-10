<?php
$string = array('1234' , 'suriya');
foreach ($string as $testString){
    if(ctype_digit($testString)){
        echo "Valid.\n";
    }
    else{
        echo "Invalid";
    }
}
?>
