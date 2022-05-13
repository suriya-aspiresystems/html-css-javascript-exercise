<?php

// Program to create copy of an object

// Creating class
class GFG {
    public $data1;
    public $data2;
    public $data3;
}

// Creating object
$obj = new GFG();


$copy = clone $obj;

// Set values of $obj object
$obj->data1 = "Geeks";
$obj->data2 = "for";
$obj->data3 = "Geeks";

// Set values of copied object
$copy->data1 = "Computer ";
$copy->data2 = "science ";
$copy->data3 = "portal";

// Print values of $obj object
echo "$obj->data1$obj->data2$obj->data3\n";

// Print values of $copy object
echo "$copy->data1$copy->data2$copy->data3\n";

?>