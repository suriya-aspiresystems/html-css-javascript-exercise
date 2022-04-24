<?php
function myfunction($v1,$v2)
{
if ($v1===$v2)
    {
    return 0;
    }
if ($v1 > $v2) return 1;
return -1;
}
$a1=array(1, 2, 4);
$a2=array(1, 3, 4);
print_r(array_uintersect($a1,$a2,"myfunction"));
?>
