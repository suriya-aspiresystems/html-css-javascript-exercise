<?php

class Database
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "Aspire@123", "employee_management");

        if ($this->conn) {
            echo "Connected Successfully";
        } else {
            echo "Not Connected";
        }
    }
}
$obj = new Database();
