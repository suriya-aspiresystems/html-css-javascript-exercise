<?php
function divide($a , $b){
    if($b == 0){
        throw new Exception("Divide by Zero");
    }
}
try{
    divide(2,0);
}
catch(Exception $obj) {
    $c = $obj->getCode();
    $l = $obj->getMessage();
    $m = $obj->getFile();
    $z = $obj->getLine();
    echo "The Error occured in line no: " . $z . "with msg " . $l;
}
