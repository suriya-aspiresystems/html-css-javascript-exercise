<?php

$host="localhost";
$user="root";
$password="Aspire@123";
$databaseName="test_database";
$link = mysqli_connect($host,$user,$password,$databaseName);
if($link == false){
   echo "Could not Connect to the database,please check the credentials".mysqli_connect_error();
}
 
echo "Connected successfully"."<br/>";
 
$sql = "INSERT INTO Aspire (EmployeeID,FirstName,LastName,Email,Phone,HireDate,Salary) VALUES (10210,'Saravanan','R','saro.ramo@aspiresys.com',8939119836,'2021-08-21',360000)";
if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error();
}
$query = "Select * From Aspire";
if($result = mysqli_query($link,$query)){
    if(mysqli_num_rows($result)){
        echo "<table>";
          echo "<tr>";
            echo "<th> EmployeeID </th>";
            echo "<th> FirstName </th>";
            echo "<th> LastName </th>";
            echo "<th> Email </th>";
            echo "<th> Phone </th>";
            echo "<th> HireDate </th>";
            echo "<th> Salary </th>";
         echo "</tr>";
      while($row = mysqli_fetch_array($result)){
          echo "<tr>";
               echo "<td>".$row['EmployeeID']."</td>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Phone']."</td>";
            echo "<td>".$row['HireDate']."</td>";
            echo "<td>".$row['Salary']."</td>";
         echo "</tr>";
      }
      echo "</table>";
      mysqli_free_result($result);
   }
   else{
     echo "No Records matching your query were found";
     mysqli_error($link);
   }
  }
  else {
    echo "could not able to execute $sql";
 }
           
mysqli_close($link);
?>
             

