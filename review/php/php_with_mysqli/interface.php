<?php
   interface A{
      public function Compute();
   }
   interface B extends A{
      public function Divide();
   }
   class C implements B{
       public function Divide(){
          $a=10;
          $b=20;
          $c=$b/$a;
          echo "Divison of a/b is :".$c;
          echo "<br>";
      }
      public function Compute(){
         $A=10;
         $B=20;
         $C=$B*$A;
         echo "Multiplication of B/A is :".$C;
         }
     }
$object = new C();
$object->Divide();
$object->Compute();
?>

         
