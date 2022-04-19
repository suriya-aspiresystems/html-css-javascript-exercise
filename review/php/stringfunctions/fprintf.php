<?php
if (!($fp = fopen('date.txt', 'w'))) {
    return;
}

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
$len = fprintf($fp, '%01.2f', $money);

echo "wrote $len bytes to date.txt";
// use the return value of fprintf to determine how many bytes we wrote
?>