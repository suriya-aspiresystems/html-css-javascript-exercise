<?php
session_start();

$_SESSION['login_ok'] = true;
$_SESSION['nome'] = 'sica';
$_SESSION['inteiro'] = 34;

echo session_encode();
?>
