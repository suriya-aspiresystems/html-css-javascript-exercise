<?php
class example {
    const X=10;
    private const Y=20;
}
$s1=new example();
echo "public=". example::X. "\n";
echo "private=" . $s1->Y ."\n";
echo "private=" . $example::Y ."\n";
?>