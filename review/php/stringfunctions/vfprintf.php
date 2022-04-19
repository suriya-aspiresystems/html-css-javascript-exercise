<?php
if (!($fp = fopen('date.txt', 'w')))
    return;

$year =1989;
$month= 12;
$day=24;
vfprintf($fp, "%04d-%02d-%02d", array($year, $month, $day));