<?php
final class Base {
    final function display() {
        echo "Base class function declared final!";
    }
    function demo() {
        echo "Base class function!";
    }
}
class Derived extends Base {
    function demo() {
        echo "Derived class function!";
    }
}
$ob = new Derived;
$ob->demo();
?>