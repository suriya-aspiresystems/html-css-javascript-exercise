<?php
class Master{
    function show(){
        echo "This is show method inside Master Class";
        echo "<br>";
    }
}
class Student extends Master{
    function show(){
        echo "This is show method inside Student Class";
    }
}

$Object = new Student();
$Object -> show();