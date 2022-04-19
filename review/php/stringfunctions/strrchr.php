<?php
$String = "Suriya";
$searchableCharacter = 'i';
if(strrpos($String,$searchableCharacter)){
    echo "$searchableCharacter is found in $String";
}