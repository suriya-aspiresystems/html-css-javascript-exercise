<?php
  class Aspire{
    var $name;
    var $age;
    var $gender;
    function setName($name){
       $this->name=$name;
    }
    function getName(){
       echo "Name : ".$this->name;
       echo "<br>";
    }
    function setAge($age){
       $this->age=$age;
    }
    function getAge(){
       echo "Age : ".$this->age;
       echo "<br>";
     }
     function setGender($gender){
        $this->gender=$gender;
     }
     function getGender(){
        echo "Gender :".$this->gender;
     }
   }
   $obj1=new Aspire();
   $obj1->setName("Suriya");
   $obj1->setAge("21");
   $obj1->setGender("Male");
   //getting
   $obj1->getName();
   $obj1->getAge();
   $obj1->getGender();
         
