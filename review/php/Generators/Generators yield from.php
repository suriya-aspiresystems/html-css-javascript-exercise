<?php
function count(){
    yield from [1,2,3];
    yield 4;
}
foreach (count() as $number){
    echo $number;
    echo "<br>";
}