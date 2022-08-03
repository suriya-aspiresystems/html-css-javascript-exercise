<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = new mysqli("localhost","root","Aspire@123","test_database");

$stmt = $connection->prepare("CALL displayRecords()");

$stmt -> execute();

do {
    if($result = $stmt->get_result()){
        printf("---\n");
        var_dump($result->fetch_all());
        $result->free();
    }
}while($stmt->next_result());