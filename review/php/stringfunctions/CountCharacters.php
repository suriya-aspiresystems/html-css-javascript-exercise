<?php
$String = "Suriya Narayan";
foreach (count_chars($String,1) as $i=>$val){
    echo "There were $val instances of $i in the String ";
    echo "<br>";
}