<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "root", "Aspire@123", "test_database");

$result = mysqli_query($mysqli, "SELECT FirstName, LastName FROM Aspire ORDER BY EmployeeID LIMIT 3");

/* Close the connection as soon as it's no longer needed */
mysqli_close($mysqli);
