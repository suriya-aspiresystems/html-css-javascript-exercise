<?php
$db = mysqli_connect("localhost", "SuriyaN", "Suriya2412!", "example_database");
    $result = mysqli_query($db,"SELECT amount from Orders;", MYSQLI_USE_RESULT);
    $row = $result->fetch_assoc();
    foreach($row as $resultant) {
       
        print "$resultant\n";
    }
?>
