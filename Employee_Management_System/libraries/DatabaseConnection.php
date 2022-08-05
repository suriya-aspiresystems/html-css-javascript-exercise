<?php

class DatabaseConnection
{
    private $dbHost = "DB_HOST"; // Ip Address of database if external connection.
    private $dbUser = "DB_USER"; // Username for DB
    private $dbPass = "DB_PASSWORD"; // Password for DB
    private $dbName = "DB_NAME"; // DB Name
    private $connection;

    public function __construct()
    {
        // $this->connection = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $this->connection = mysqli_connect("localhost", "root", "Aspire@123", "employee_management_system");
        if (!$this->connection) {
            echo "Failed to Connected to Database.";
        }
    }
}

$object = new DatabaseConnection();
