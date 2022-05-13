<?php
// Your code here!
trait Reader{
    public function sum($var1,$var2){
        return $var1+$var2;
    }
}
trait Writer{
    public function multiply($var1,$var2){
        return $var1*$var2;
    }
}
class File{
    use Reader;
    use Writer;
    public function Calculate($var1,$var2){
        echo "Result is: ".$this->sum($var1,$var2);
        echo "<br>";
        echo "Result is:".$this->multiply($var1,$var2);
    }

}
$object = new File();
$object->Calculate(5,3);
?>