<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = new mysqli("localhost","root","Aspire@123","test_database");


$query = "select count(*) as Count from Aspire;
          select count(Phone) as Phone_Count FROM Aspire;";
          
$connection->multi_query($query);
do{
    if($result=$connection->store_result()){
        var_dump($result->fetch_all(MYSQLI_ASSOC));
        $result->free();
    }
} while ($connection->next_result());
