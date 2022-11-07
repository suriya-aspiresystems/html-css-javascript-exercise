<?php

class Employeeallcrud extends EmployeeDetails
{
    public function insert()
    {
        $disp = new EmployeeDetails();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $employeeid = $_POST['employeeid'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phone'];
            $designation = $_POST['designation'];
            $status = $_POST['status'];
            $sql = $disp->insertData($employeeid,$name,$email,$number,$designation,$status);
            
            if($sql)
            {
                $_SESSION['addmessage'] = "Added Successfully";
                header("location:http://localhost/Employeemanagementsystem/public/hrdetails");
            }
        }
    }

    public function update()
    {

        $disp = new EmployeeDetails();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET['updatedata'];
            $employeeid = $_POST['employeeid'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phone'];
            $designation = $_POST['designation'];
            $status = $_POST['status'];
            //echo $number;
            $sql = $disp->updating($employeeid,$id,$name,$email,$number,$designation,$status,"id");
            if($sql)
            {
                //$_SESSION['updatemessage'] = "Updated Successfully";
                header("location:http://localhost/Employeemanagementsystem/public/hrdetails");        
            }
            echo "Not";
        }
    }

    

    public function delete()
    {
        $disp = new EmployeeDetails();
        $id = $_GET['deletedata'];
        $sql = $disp->deleting($id,"id");
        if($sql)
        {
            header("location:http://localhost/Employeemanagementsystem/public/hrdetails");
        }
        echo "Not";          
    }
    public function undo()
    {
        $disp = new EmployeeDetails();
        $id = $_GET['undodata'];
        $sql = $disp->undo($id,"id");
        if($sql)
        {
            header("location:http://localhost/Employeemanagementsystem/public/hrdetails");
        }
        echo "Not";
    }
}

?>