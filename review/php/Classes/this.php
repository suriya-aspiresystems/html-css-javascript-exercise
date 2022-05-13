<?php
class myclass{
    private string $name;
    private int $age;
    function setdata(string $x, int $y){
        $this->name=$x;
        $this->age=$y;
    }
}
$obj=new myclass("Kiran",20);
?>