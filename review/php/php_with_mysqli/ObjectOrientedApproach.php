<?php

$host="localhost";
$user="root";
$password="Aspire@123";
$databaseName="test_database";

$link = new mysqli($host,$user,$password);

if ($link->connect_error) {
  echo "Connection failed: " . $link->connect_error;
}
echo "Connected successfully";
?>
