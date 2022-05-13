<?php
#[SuriyaAttribute(value: 1234)]
class MyAttribute{
}
$var=new MyAttribute();
$ref=new ReflectionClass($var);
$attributes=$ref->getAttributes();
foreach($attributes as $attribute){
    var_dump($attribute->getName());
    echo "<br>";
    var_dump($attribute->getArguments());
    echo "<br>";
}
?>