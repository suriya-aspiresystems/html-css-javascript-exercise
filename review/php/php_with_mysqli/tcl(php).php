<?php
$mysqli = new mysqli("localhost", "root", "Aspire@123", "test_database");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->query("CREATE TABLE Language(FirstLanguage varchar(25),SecondLanguage varchar(25),Rating int);
");

/* set autocommit to off */
$mysqli->autocommit(FALSE);

/* Insert some values */
$mysqli->query("INSERT INTO Language VALUES ('DEU', 'Bavarian', 11.2)");
$mysqli->query("INSERT INTO Language VALUES ('DEU', 'Swabian', 9.4)");

/* commit transaction */
$mysqli->commit();

/* drop table */
$mysqli->query("DROP TABLE Language");

/* close connection */
$mysqli->close();
?>
