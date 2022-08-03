<?php
   $host = "localhost";
   $userName = "root";
   $password = "Aspire@123";
   $databaseName = "test_database";
   
    $mysqli = new mysqli($host,$userName,$password,$databaseName);
    echo $mysqli->host_info."<br/>";

    $mysqli = new mysqli("127.0.0.1",$userName,$password,$databaseName);

    echo $mysqli->host_info;
?>
