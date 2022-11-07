<?php

class EmployeeDetails extends Database
{
    public function insertData($employeeid,$name,$email,$phone,$designation,$status)
    {
        //echo "INSERT INTO employee (employeename,email,password,phone) VALUES ('".$name."','".$email."','".$password."','".$phone."')";
        $inserting = mysqli_query($this->connection,"INSERT INTO employee (employee_id,employeename,email,phone,designation,status) VALUES ('".$employeeid."','".$name."','".$email."','".$phone."', '" .$designation."','" .$status."')");
        return $inserting;
    }
    public function display($id)
    {
        if(!empty($id))
        {
            $result = $this->connection->query("SELECT * FROM employee WHERE id = '$id'");
        }else{
            $result = $this->connection->query("SELECT * FROM employee");
        }
        return $result;
    }
    public function updating($employeeid,$id,$name,$email,$phone,$designation,$status)
    {
        $update = $this->connection->query("UPDATE employee SET employee_id= '$employeeid', employeename = '$name' , email ='$email' , phone = '$phone', designation = '$designation',status='$status' where id = '$id' ");
        return $update;
    }
    public function display_logindata($name)
    {
        $display_login = "SELECT * FROM employee where employeename = '$name'";
        $result = mysqli_query($this->connection,$display_login);
        return $result;
    }
    public function countEmployee()
    {
        $sql = "Select id from employee ORDER BY id";
        $query_run = mysqli_query($this->connection,$sql);
        $row = mysqli_num_rows($query_run);
        return $row;
    }
    public function index()
    {
        $employeeQuery = "SELECT * FROM employee";
        $result = $this->connection->query($employeeQuery);
        if($result->num_rows>0)
        {
            return 1;
        } else{
            return 2;
        }
    }
    public function countManager()
    {
        $sql = "Select id from manager ORDER BY id";
        $query_run = mysqli_query($this->connection,$sql);
        $row = mysqli_num_rows($query_run);
        return $row;
    }
    public function deleting($id,$Sno)
    {
        $delete = mysqli_query($this->connection,"update employee set status='Deactivate' where id='$id'");
        return $delete;
    }
    public function undo(){
        if(isset($_GET['undodata'])){
            $id = $_GET['undodata'];
            $query = mysqli_query($this->connection,"Select * from employee where status=-1");
            return $query;
        }
    }
    public function pagination()
    {
        $page_per_record=4;
        if(isset($_GET['page']))
        {
            $page=$_GET['page'];
            $_SESSION['pages']=$page;
        }
        else
        {
            $page=1;
            $_SESSION['pages']=$page;
        }
        $start_from=($page-1)*$page_per_record;
        $query="Select * from employee limit $start_from,$page_per_record";
        $rs_result=mysqli_query($this->connection,$query);
    }
    public function page()
    {
        $pageNo="SELECT COUNT(*) FROM employee";
        $result=mysqli_query($this->connection,$pageNo);
        return $result;
    }
    
}