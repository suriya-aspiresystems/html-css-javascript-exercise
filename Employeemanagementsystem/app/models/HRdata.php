<?php
class HRdata extends Database
{
    public function countEmployee()
    {
        $sql = "Select id from employee ORDER BY id";
        $query_run = mysqli_query($this->connection,$sql);
        $row = mysqli_num_rows($query_run);
        return $row;
    }
    public function countManager()
    {
        $sql = "Select id from manager ORDER BY id";
        $query_run = mysqli_query($this->connection,$sql);
        $row = mysqli_num_rows($query_run);
        return $row;
    }
    public function display_logindata()
    {
        $display_login = "SELECT * FROM employee where status ='Active'";
        $result = mysqli_query($this->connection,$display_login);
        return $result;
    }
    public function display_undodata()
    {
        $display_login = "SELECT * FROM employee where status='Deactivate'";
        $result = mysqli_query($this->connection,$display_login);
        return $result;
    }
    public function pagination()
    {
        $limit=2;
        $page_number=2;
        $offset=($page_number-1)*$limit;
        $query="select * from employee limit $limit ,  offset $offset";
        $result=mysqli_query($this->connection,$query);
        return $result;
    } 
}