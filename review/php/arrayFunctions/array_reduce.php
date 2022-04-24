<?php
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}
$a = array(1, 2, 3, 4, 5);
var_dump(array_reduce($a, "sum")); 
