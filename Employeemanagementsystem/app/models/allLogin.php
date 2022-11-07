<?php

class AllLogin extends Database
{
    public function HRLogin()
    {
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            //echo "hlo";
            $email = mysqli_real_escape_string($this->connection,$_POST['email']);
            $password = mysqli_real_escape_string($this->connection, $_POST['password']);
            $sql = "SELECT * FROM hr WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($this->connection,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row =mysqli_fetch_array($result);
                $_SESSION['hrname'] = $row['hrname'];

                header("location:http://localhost/Employeemanagementsystem/public/hrdashboard");
            } else{
                header("location:http://localhost/Employeemanagementsystem/public/admin");
            }
        }
    }
    public function employeeLogin()
    {
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $email = mysqli_real_escape_string($this->connection,$_POST['email']);
            $password = mysqli_real_escape_string($this->connection,$_POST['password']);
            $sql = "SELECT * FROM employee WHERE email = '$email' and password = '$password'";
            $result = mysqli_query($this->connection,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row =mysqli_fetch_array($result);
                $_SESSION['employeename'] = $row['employeename'];
                header("location:http://localhost/Employeemanagementsystem/public/employeedashboard");
             }
            //echo "hlo";
        }
    }
    public function managerLogin()
    {
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $email = mysqli_real_escape_string($this->connection,$_POST['email']);
            $password = mysqli_real_escape_string($this->connection,$_POST['password']);
            $sql = "SELECT * FROM manager WHERE email = '$email' and password = '$password'";
            $result = mysqli_query($this->connection,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row =mysqli_fetch_array($result);
                $_SESSION['managername'] = $row['managername'];
                header("location:http://localhost/Employeemanagementsystem/public/managerdashboard");
             }
            //echo "hlo";
        }
    }

}