<?php
interface Method1{
    public function showOnPage1();
    public function showOnPage2();
    public function showOnPage3();

}
interface Method2 extends Method1{
    public function showOnPage4();
    public function showOnPage5();
    public function showOnPage6();
}
class ParentClass implements Method2{
    public function showOnPage1()
    {
        // TODO: Implement showOnPage2() method.
        echo "Page1";
    }
    public function showOnPage2()
    {
        // TODO: Implement showOnPage2() method.
        echo "Page 2";
        echo "<br>";
    }
    public function showOnPage3()
    {
        // TODO: Implement showOnPage2() method.
        echo "Page 3";
        echo "<br>";
    }
    public function showOnPage4()
    {
        // TODO: Implement showOnPage2() method.
        echo "Page 4";
    }
    public function showOnPage5()
    {
        // TODO: Implement showOnPage2() method.
        echo "Page 5";
        echo "<br>";
    }
    public function showOnPage6()
    {
        // TODO: Implement showOnPage2() method.
        echo "Page 6";
        echo "<br>";
    }

}
$Object = new ParentClass();
echo "<b> Interface <br>==========</b><br>";
$Object->showOnPage1();
$Object->showOnPage2();
$Object->showOnPage3();
$Object->showOnPage4();
$Object->showOnPage5();
$Object->showOnPage6();
