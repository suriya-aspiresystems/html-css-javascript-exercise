<?php
class Aspire{
    public $name;
    public $Intern;
    function __construct($name,$Intern){
        $this->name=$name;
        $this->Intern=$Intern;
    }
    function getData(){
        echo "My name is: ".$this->name. " Age is: " . $this->Intern . "<br>";
    }


}
$Employee = new Aspire("Suriya" , "Int0644");

$Employee ->getData();
$Employee->name="Ani";
echo $Employee->name;