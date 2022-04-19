<?php

$input = <<<'testNowdoc'
 
Welcome to GeeksforGeeks.
Started content writing in GeeksforGeeks!.
 
testNowdoc;

echo $input;

// Directly printing string without any variable
echo <<<'Nowdoc'
<br/>
Welcome to GFG .
Learning PHP is fun in GFG.
     
Nowdoc;

?>