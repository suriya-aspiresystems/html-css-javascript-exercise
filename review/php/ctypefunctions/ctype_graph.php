<?php
$string = array('Aspire' , 'sur iya');
foreach ($string as $testString){
    if(ctype_graph($testString)){
        echo "Valid.\n";
    }
    else{
        echo "Invalid";
    }
}
?>
