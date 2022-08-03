<?php

$conn = new mysqli('localhost', 'root', 'Aspire@123', 'test_database');

if ($conn->connect_error) {
    echo "Database connection failed: ";
}
else{
echo "Database connection was successful";
}
