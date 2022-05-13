<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}
?>