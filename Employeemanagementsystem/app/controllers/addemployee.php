<?php

class addemployee extends Controller
{
    public function index()
    {
        $this->loadModel("employeeDetails");
        $this->loadModel("employeeallcrud");
        $this->view("HR/addemployee");
    }
    public function nameValid()
    {
        if(isset($_POST['sub_btn']) && (isset($_POST['name'])))
        {
            $name = $_POST['name'];
            if($name == "")
            {
                echo $error_name = "Please enter your Name"; 
            }
            else
            {
                try {
                    if(!preg_match("/^[a-zA-Z ]*$/",$name))
                    {
                        throw new Exception("Only Alphabets and white spaces are allowed");
                    }
                } catch (Exception $e) {
                   echo $errorName = $e->getMessage();
                }
            }
        }
    }

    function emailValid()
    {
        if(isset($_POST['sub_btn'])&& isset($_POST['email']))
        {
            $email = $_POST['email'];
            if($email == "")
            {
                echo $error_email=  "<span class = 'error'>Please enter your email</span>"; 
            }
            else{
                try {
                    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
                    if(!preg_match($pattern,$email))
                    {
                        throw new Exception("Enter Valid email");
                    }
                } catch (Exception $e) {
                    echo $error_email = $e->getMessage();
                }
            }
        }
    }

    function passwordValid()
    {
        if(isset($_POST['sub_btn'])&&isset($_POST['password']))
        {
            $password = $_POST['password'];
            if($password == "")
            {
               echo $error_password =  "Please enter password";
            }
        }
    }

    function numberValid()
    {
        if(isset($_POST['sub_btn'])&&isset($_POST['phone']))
        {
            $phonenumber = $_POST['phone'];
            if($phonenumber == "")
            {
                echo $error_number =  "Please enter PhoneNumber";
            }
        }
        else
        {
            try {
                if(!preg_match("/^[0-9]*$/",$_POST['phone']))
                {
                    throw new Exception("Enter valid number");
                }
                if(strlen($_POST['phone'])!=10)
            {
                $errNumber = "enter 10 number";
            }
            } catch (Exception $e) {
                $errNumber = $e->getMessage();
            }
            
        }
    }
}
?>
}