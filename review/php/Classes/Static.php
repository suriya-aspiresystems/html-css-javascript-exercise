<?php
class Solution{
    static $count;
    public static function getCount(){
        return self::$count++;
    }
}
Solution::$count=1;
for($i = 0 ; $i < 5 ; $i++){
    echo 'The next value is: '.Solution::getCount();
    echo "<br>";
}