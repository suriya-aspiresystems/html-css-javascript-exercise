<?php
//class GeeksForGeeks
//{
//    public $x = 100 ;  # public attributes
//    public $y = 50 ;
//    function add()
//    {
//        echo $a = $this->x + $this->y ;
//        echo " ";
//    }
//}
//class child extends GeeksForGeeks
//{
//    function sub()
//    {
//        echo $s = $this->x - $this->y ;
//    }
//
//}
//
//$obj = new child;
//
//// It will return the addition result
//$obj->add() ;
//
//// It's a derived class of the main class,
//// which has a public object and therefore can be
//// accessed, returning the subtracted result.
//$obj->sub() ;
class Fruits
{
    public $name;
    public $color;
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
}
    $apple=new Fruits();
    $apple->set_name("Apple");
    echo "I Love:".$apple->get_name()."<br>";
    $apple->set_color("Red");
    echo "My apple color is:".$apple->get_color()."<br>";
    $orange=new Fruits();
    $orange->set_name("Orange");
    echo "I Love:".$orange->get_name()."<br>";
    $orange->set_color("Orange");
    echo "My apple color is:".$orange->get_color()."<br>";

?>