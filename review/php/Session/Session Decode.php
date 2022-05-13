<?php
//Starting the session
session_start();
$_SESSION['data'] = "This is sample data";
$res = session_encode();
print("Encoded Data: ".$res);
echo "<br>";

//Decoding the session
session_decode($res);
print_r($_SESSION);
?>