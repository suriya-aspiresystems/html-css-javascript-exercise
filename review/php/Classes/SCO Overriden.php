<?php
class Demo{
    public static $bar = 10;
    public static function fun(){
        echo static ::$bar. "\n";
    }
}
class Child extends demo{
    public static $bar = 20;
}
Demo::fun();
Child::fun();