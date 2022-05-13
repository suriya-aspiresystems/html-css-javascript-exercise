<?php
abstract class Person{
    abstract function display($name);
}
class ChildA extends Person{
    function display($name)
    {
        // TODO: Implement display() method.
        echo "Name 1:".$name;
    }
}
class ChildB extends Person{
    function display($name2)
    {
        // TODO: Implement display() method.

        echo "Name 2:".$name2;
    }
}
$Object = new ChildA();

$Object2=new ChildB();
$Object->display("Suriya");
$Object2->display("Narayan");
