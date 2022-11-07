<?php

class employeeprofile extends Database
{
    public function display($id)
    {
        if(!empty($id))
        {
            $result = $this->connection->query("SELECT * FROM employee_basicinfo WHERE employee_id = '$id'");
        }else{
            $result = $this->connection->query("SELECT * FROM employee_basicinfo");
        }
        return $result;
    }
    public function updating($employeeid,$employeename,$employeeemail,$employeephonenumber,$password,$confirmpassword,$address,$gender,$dateofbirth,$city,$country,$pincode)
    {
        $update = $this->connection->query("UPDATE employee _basicinfo SET employee_id= '$employeeid',employee_name = '$employeename',employee_email = '$employeeemail',employeephonenumber = '$employeephonenumber',password = '$password',confirm_password = '$confirmpassword',address = '$address', city = '$city',country = '$country' ,pincode = '$pincode' where id = '$employeeid'");
        return $update;
    }
    public function display_logindata()
    {
        $display_login = "SELECT * FROM employee";
        $result = mysqli_query($this->connection,$display_login);
        return $result;
    }

}