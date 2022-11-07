<?php


Class Database
{
    public function __construct()
    {
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

        if(!$this->connection)
        {
            echo "Database Connection Failed";
        }
        return $this->connection;
    } 
}
