<?php
$x = 100;
$y = 200;
$z = 300;
if($x>$y &&$x>$z){
    echo "X is Greater";
}
else if($y>$z&&$y>$x){
    echo "Y is Greater";
}
else{
    echo "Z is Greater";
}