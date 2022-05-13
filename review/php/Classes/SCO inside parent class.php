<?php
class testclass{
    public function sayhello(){
        echo "Hello World\n";
    }
}
class myclass extends testclass{
    public function sayhello(){
        parent::sayhello();
        echo "Hello PHP";
    }
}
$obj=new myclass();
$obj->sayhello();
?>

