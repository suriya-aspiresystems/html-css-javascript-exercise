<?php

spl_autoload_register(function ($className) {
    include $className . ".php";
});
session_start();
class allLogin extends Database implements adminlogin
{
    public function adminLogin()
    {
        if (isset($_POST['login_btn'])) {
            $email = mysqli_real_escape_string($this->conn, $_POST['email']);
            $password = mysqli_real_escape_string($this->conn, $_POST['password']);
            $sql = "SELECT * FROM hr WHERE name = '$email' AND password = '$password'";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['email'] = $email;
                header("location:http://localhost/EMS/public/hrpage");
            } else {
                header("location:http://localhost/leave/public/HRlogin");
            }
        }
    }
    public function employeeLogin()
    {
        if (isset($_POST['login_btn'])) {
            $email = mysqli_real_escape_string($this->conn, $_POST['email']);
            $password = mysqli_real_escape_string($this->conn, $_POST['password']);
            $sql = "SELECT * FROM employee WHERE email = '$email' AND md5('$password')";

            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $_SESSION['name'] = $row['name'];
                header("location:http://localhost/EMS/public/employeedashboard");
            }
        }
    }
    public function managerLogin()
    {
        if (isset($_POST['login_btn'])) {
            $email = mysqli_real_escape_string($this->conn, $_POST['email']);
            $password = mysqli_real_escape_string($this->conn, $_POST['password']);
            $sql = "SELECT * FROM manager WHERE email = '$email' AND password = md5('$password')";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                $_SESSION['name'] = $row['name'];
                header("location:http://localhost/EMS/public/managerdashboard");
            }
        }
    }
}