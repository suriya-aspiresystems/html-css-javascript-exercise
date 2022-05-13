<?php
// if session is not started
session_start();

// store our current session
$my_sess = $_SESSION;

session_decode($data);
$data = $_SESSION;

print_r($data);

// restore our own session
$_SESSION = $my_sess;

?>
