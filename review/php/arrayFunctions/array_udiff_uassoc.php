<?php

function arr_udiffassocFun($x, $y)
{       
    return ($x === $y)? 0 : 1;
}
  
// array list for comparison.
$arr1 = array(
    "a" => "Raj",
    "b" => "Ram",
    "d" => "Denish",
    "r" => "David"
);
$arr2 = array(
    "a" => "Raj",
    "y" => "Ram",
    "d" => "Denish",
    "x" => "Ritche"
);
  
// Driver code
$result = array_udiff_uassoc($arr1,
             $arr2, "arr_udiffassocFun");
print_r($result);
?>
