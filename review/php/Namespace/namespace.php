<?php
include 'monitor.php';
include 'cpu.php';
//use monitor\WorkProcess;//creates workprocess inside monitor,Used only when we use namespace
$object1 = new cpu\WorkProcess();
$object1->doWork();

$object2 = new monitor\WorkProcess();
$object2  -> doWork();
?>