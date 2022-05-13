<?php
class MyClass{
    public $a = 'Public';
    protected $b = 'Protected';
    private $c = 'Private';
    function printDetails(){
        echo $this->a;
        echo $this->b;
        echo $this->c;
    }
}
$obj = new Myclass();
echo $obj->a;
echo $obj->b;
echo $obj->c;