<?php

class ManagerEmployeeallcrud extends Manageremployeedetails
{
    public function insert()
    {
        $disp = new Manageremployeedetails;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $employeeid = $_POST['employeeid'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phone'];
            $designation = $_POST['designation'];
            $sql = $disp->insertEmployee($employeeid,$name,$email,$number,$designation);
            
            if($sql)
            {
                $_SESSION['addmessage'] = "Added Successfully";
                header("location:http://localhost/Employeemanagementsystem/public/managerpage");
            }
        }
    }

    public function update()
    {

        $disp = new Manageremployeedetails;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET['updatedata'];
            $employeeid = $_POST['employeeid'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phone'];
            $designation = $_POST['designation'];
            //echo $number;
            $sql = $disp->updateEmployee($employeeid,$id,$name,$email,$number,$designation,"id");
            if($sql)
            {
                //$_SESSION['updatemessage'] = "Updated Successfully";
                header("location:http://localhost/Employeemanagementsystem/public/managerpage");        
            }
            echo "Not";
        }
    }

    

    public function delete()
    {
        $disp = new Manageremployeedetails;
        $id = $_GET['deletedata'];
        $sql = $disp->deleteEmployee($id,"id");
        if($sql)
        {
            header("location:http://localhost/Employeemanagementsystem/public/managerpage");
        }
        echo "Not";
              
    }
}

?>