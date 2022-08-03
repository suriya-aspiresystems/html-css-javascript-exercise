<?php

$host="localhost";
$user="root";
$password="Aspire@123";
$databaseName="test_database";

$link = mysqli_connect($host,$user,$password,$databaseName);
if($link == false){
   echo "Could not Connect to the database,please check the credentials".mysqli_connect_error();
}
$query = "Select * from Aspire";
if($result=mysqli_query($link,$query)){
    if(mysqli_num_rows($result)>0){
       echo "<table>";
         echo "<tr>";
             echo "<th>EmployeeID</th>";
             echo "<th>FirstName</th>";
             echo "<th>LastName</th>";
             echo "<th>Email</th>";
             echo "<th>Phone</th>";
             echo "<th>HireDate</th>";
             echo "<th>Salary</th>";
         echo "</tr>";
      while($row=mysqli_fetch_array($result)){
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
             

