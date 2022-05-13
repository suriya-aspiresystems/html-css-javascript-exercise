<?php
Class A{
    function showA(){
        echo "I am show method in A class";
        echo "<br>";
    }
}
class B extends A{
    function showB(){
        echo "I am show method in B class";
        echo "<br>";
    }
}
class C extends B{
    function showC(){
        echo "I am show method inside C class";
    }
}
$obj = new C();
$obj->showA();
$obj->showB();
$obj->showC();