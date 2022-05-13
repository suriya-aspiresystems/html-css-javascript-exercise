<?php
// Your code here!
function myGenerator(){
    for($i=0;$i<10;$i++){
        yield $i=>$i+2;
    }
}
$generator=myGenerator();
foreach ($generator as $key=>$value){
    echo "Generator: ".$key. "Value: ".$value;
}
?>