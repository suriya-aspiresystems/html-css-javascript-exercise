<?php
class Calculator{
    protected $x = 500;
    protected $y = 1000;
    function sum()
    {
        echo $sum = $this->x - $this->y . "<br>";
    }
}
class Child extends Calculator {
    function multiply(){
        echo $multiply = $this->x * $this-> y;
    }
}
$Object = new Child();
$Object->sum();
$Object->multiply();