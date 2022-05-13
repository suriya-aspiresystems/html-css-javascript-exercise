<?php
include 'autoloadClass.php';
class Circle
{
    const PI = 3.14;
    public $radius;
    public function __construct(float $radius){
        $this->radius = $radius;
}
public function area(): float{
        return self::PI * $this->radius ** 2;
    }
}
$result=new Circle("2.5");
echo 'Result is:'.$result->area()."<br>";