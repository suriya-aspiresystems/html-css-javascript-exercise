<?php
class Hello{
    function __toString(){
        return "You are Using Magic methods inside the String";
    }
}
$Obj=new Hello();
echo $Obj;
?>