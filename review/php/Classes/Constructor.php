<?php
class Rectangle{
    public $height;
    public $width;

    function __construct($arg1, $arg2){
        $this->height=$arg1;
        $this->width=$arg2;
    }
    function show(){
        echo "Height=$this->height Width=$this->width";
    }
}
$object= new Rectangle(12,24);
$object ->show();