<?php

class employeeprofileallcrud extends employeeprofile
{
    public function update()
    {
        $disp = new employeeprofile();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET['updatedata'];
            $employeeid = $_POST['employeeid'];
            $name = $_POST['employeename'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $dateofbirth = $_POST['dateofbirth'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $pincode = $_POST['pincode']; 
            $sql = $disp->updating($employeeid,$name,$email,$phone,$password,$confirmpassword,$address,$gender,$dateofbirth,$country,$city,$pincode,"id");
            if($sql)
            {
                //$_SESSION['updatemessage'] = "Updated Successfully";
                header("location:http://localhost/Employeemanagementsystem/public/employeebasicinfo");        
            }
            echo "Not";
        
        }
    }
}