<?php
class User
{
    public $name;
    public $age;
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    function getData(){
        echo "My name is: ".$this->name. " Age is: " . $this->age . "<br>";
    }
    function __destruct()
    {
       echo "{$this->name} and {$this->age} is destroyed <br>";
    }

}
$object1=new User("Suriya","22");
$object1->getData();
$object2=new User("Venkatesh","22");
$object2->getData();
?>