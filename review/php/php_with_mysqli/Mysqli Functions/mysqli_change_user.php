<?php

$connection = mysqli_connect("localhost","root","Aspire@123","test_database");

$sql = mysqli_change_user($connection,"Suriya","Aspire@123","myDB");

if($sql){
    echo "User changed Successfully";
}
else{
    echo "Not Able to change the User";
}

mysqli_close($connection);