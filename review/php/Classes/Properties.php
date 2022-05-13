<?php
class MyClass{
    private $fname = "kiran";
    public $mname = "Pratap";
    static $lname = "Singh";
    function display()
    {
        echo "$this->fname\n";
        echo "$this->mname\n";
        echo MyClass::$lname;
    }

}
$object = new MyClass();
$object->display();