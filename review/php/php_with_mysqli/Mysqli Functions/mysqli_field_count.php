<?php
   $connection_mysql = mysqli_connect("localhost","root","Aspire@123","test_database");
   
   if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   
   mysqli_query($connection_mysql,"SELECT * FROM Aspire");
   print(mysqli_field_count($connection_mysql));
   
   mysqli_close($connection_mysql);
?>