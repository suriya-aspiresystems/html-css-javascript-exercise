<?php

class Manageremployeedetails Extends Database
{
    public function insertEmployee($employeeid,$name,$email,$phone,$designation)
    {
        //echo "INSERT INTO employee (employeename,email,password,phone) VALUES ('".$name."','".$email."','".$password."','".$phone."')";
        $inserting = mysqli_query($this->connection,"INSERT INTO employee (employee_id,employeename,email,phone,designation) VALUES ('".$employeeid."','".$name."','".$email."','".$phone."','".$designation."')");
        return $inserting;
    }
    public function displayEmployee($id)
    {
        if(!empty($id))
        {
            $result = $this->connection->query("SELECT * FROM employee WHERE id = '$id'");
        }else{
            $result = $this->connection->query("SELECT * FROM employee");
        }
        return $result;
    }
    public function updateEmployee($employeeid,$id,$name,$email,$phone,$designation)
    {
        $update = $this->connection->query("UPDATE employee SET employee_id = '$employeeid',employeename = '$name' , email ='$email' , phone = '$phone' , designation = '$designation' where id = '$id' ");
        return $update;
    }
    public function deleteEmployee($id,$Sno)
    {
        $delete = mysqli_query($this->connection,"DELETE from employee where $Sno = '$id'");
        return $delete;
    }
    public function display($id)
    {
        if(!empty($id))
        {
            $display = mysqli_query($this->connection,"SELECT * FROM employee where id ='$id'");
        }
        else
        {
            $display = mysqli_query($this->connection,"SELECT * FROM employee");
        }
        return $display;
    }
}