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
 
$sql = "INSERT INTO Aspire (EmployeeID,FirstName,LastName,Email,Phone,HireDate,Salary) VALUES (?, ?, ?,?,?,?,?)";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $EmployeeID, $FirstName,$LastName, $Email,$Phone,$HireDate,$Salary);
    
    $EmployeeID = "10211";
    $FirstName = "Bala";
    $LastName = "Subramaniam";
    $Email = "bala.subu@aspiresys.com";
    $Phone = 9841720684;
    $HireDate = '2021-09-08';
    $Salary = 360000;
    
    echo "Record Inserted Successfully";
    }
else{
  echo "Error:Could not prepare query:$sql";
 mysqli_error($link);
 }
 mysqli_stmt_close($stmt);
 
mysqli_close($link);
?>
    
