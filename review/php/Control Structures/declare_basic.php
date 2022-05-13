<?php
function myfunction(){
    echo "Hello World\n";
}
register_tick_function("myfunction");
declare (ticks=2){
    for ($i=1; $i<=10; $i++){
        echo $i."\n";
    }
}
?>