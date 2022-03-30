<?php
//local scope
function local(){
    $local=2;
    echo "local variable: ".$local." ";
}
local();
echo "<br>";
//global
$g=5;
function glo(){
    echo "global variable: " .$GLOBALS['g'];
}
glo();
echo "<br>";
function st_var(){
    static $num1=5;//static variable
    $num2=6;       //non static variable

    $num1++;
    $num2++;
    echo "Static:" .$num1. "<br>";
    echo "Non-Static:" .$num2. "<br>";
}
st_var();
st_var();

?>