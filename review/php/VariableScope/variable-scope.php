<?php
//local scope
function localScopeFunction(){
    $localVariable=2;
    echo "local variable: ".$localVariable." ";
}
localScopeFunction();
echo "<br>";
//global
$globalVariable=5;
function glo(){
    echo "global variable: " .$GLOBALS['glo'];
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