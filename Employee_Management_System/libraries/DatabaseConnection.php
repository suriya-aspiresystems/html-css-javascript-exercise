<?php

class DatabaseConnection{
    private $mysqli;
    public static $instance;

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;

    }
    private function __construct()
    {
       $this->mysqli = new mysqli('localhost','root','Aspire@123','employee_management_system');
       if($this->mysqli->connect_error)
       {
          die($this->mysqli->connect_errno);
       }
       else
       {
          echo "Connected Successfully";
       }
    }
    
}