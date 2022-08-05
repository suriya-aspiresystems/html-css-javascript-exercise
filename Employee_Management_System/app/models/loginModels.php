<?php

class LoginModel extends DatabaseConnection
{
                   
    public function getLogin()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $check_user = "select * from login_details where username = '$email' AND password='$password'";
            $run = mysqli_query($this->conn, $check_user);
            if ($email == "suriya@gmail.com" && $password == "suriya2412") {
                return 'login';
            } else {
                echo "<script>alert('Email or password is incorrect!')</script>";
            }
        }
    }
}
