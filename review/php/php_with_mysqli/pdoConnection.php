<?php
  $host = "localhost";
  $databaseName = "test_database";
  $userName = "root";
  $password = "Aspire@123";

  $dataSourceName = "mysql:host=$host;dbname=$databaseName";

  try{
       $databaseConnection  = new PDO($dataSourceName,$userName,$password);
       $databaseConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

       echo "PDO Connection was Set Successful";
       $sql = "Select * From Aspire";
       $users = $databaseConnection->query($sql);
       foreach($users as $user){
          echo "<li>". $user["EmployeeID"]."</li>";
       }
  }
  catch(PDOException $error){
        echo $error->getMessage();
        echo $error->getCode();
  }