<?php
class machine {
    function doTask($var1){
        return $var1;
    }
    function doTask($var1,$var2){
        return $var1 * $var1 ;
    }
}
$task1 = new machine();
$task1->doTask(5,10);
?>