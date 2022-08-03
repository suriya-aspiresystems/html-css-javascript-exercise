<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = mysqli_connect("localhost","root","Aspire@123","test_database");

/* select all rows */
$result = mysqli_query($connection, "SELECT LastName FROM Aspire");
printf("Affected rows (SELECT): %d\n", mysqli_affected_rows($connection));
