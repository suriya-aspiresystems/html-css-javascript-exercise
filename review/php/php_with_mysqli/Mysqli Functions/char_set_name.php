<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = mysqli_connect("localhost","root","Aspire@123","test_database");

mysqli_set_charset($connection,'utf8mb4');

$charset = mysqli_character_set_name($connection);

printf("Current Character Set is %s\n",$charset);
?>