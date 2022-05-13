<?php
class ParentClass{
    public function publicMethod(){
        echo "This is under public method of parentclass";
        echo "<br>";
    }
    private function privateMethod(){
        echo "This is under private method of parentclass\n";
        echo "<br>";
    }
    protected function protectedMethod(){
        echo "This is under protected method of parentclass\n";
        echo "<br>";
    }
}
class ChildClass extends ParentClass{
    public function childMethod(){
        $this->publicMethod();
        $this->protectedmethod();
    }
}
$Object = new ChildClass();
$Object->publicMethod();
$Object->childMethod();