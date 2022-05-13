<?php
$pdo = new PDO("mysql:host=localhost;dbname=example_database", 'SuriyaN', 'Suriya2412!');


$uresult = $pdo->query("SELECT * FROM Orders");
$row = $uresult->fetch();
foreach ( $row as $result){
   echo $result;
   echo "<br>";
   }
?>
