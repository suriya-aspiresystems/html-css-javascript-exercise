<?php
 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = mysqli_connect("localhost","root","Aspire@123","test_database");

mysqli_query($connection, "CREATE TABLE IF NOT EXISTS language (
    Code varchar(25) NOT NULL,
    Speakers int NOT NULL
    );");

// Start Transaction

mysqli_begin_transaction($connection);
try {
    /* Insert some values */
    mysqli_query($connection, "INSERT INTO language(Code, Speakers) VALUES ('DE', 4)");

    /* Try to insert invalid values */
    $language_code = 'FR';
    $native_speakers = 5;
    $stmt = mysqli_prepare($connection, 'INSERT INTO language(Code, Speakers) VALUES (?,?)');
    mysqli_stmt_bind_param($stmt, 'ss', $language_code, $native_speakers);
    mysqli_stmt_execute($stmt);

    /* If code reaches this point without errors then commit the data in the database */
    mysqli_commit($connection);
} catch (mysqli_sql_exception $exception) {
    mysqli_rollback($connection);

    throw $exception;
}