<?php
  class A{
     public function myage(){
        return "My age is 80";
        echo "<br>";
       }
  }
  class B extends A{
      public function mySonAge(){
         return "My Son Age is 50";
         return "<br>";
         }
   }
   class C extends B{
       public function myGrandsonAge(){
          return "My Son Age is 20";
          echo "<br>";
       }
       public function myHistory(){
          echo "Class A :".$this->myage();
          echo "Class B :".$this->mySonAge();
          echo "Class C :".$this->myGrandSonAge();
        }
     }
$object = new C();
$object->myHistory();
         
    
