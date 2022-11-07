<?php

class Managerallcrud extends managerDetails
{
    public function insert()
    {
        $data = new managerDetails();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $managerid = $_POST['managerid'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phone'];
            $department = $_POST['department'];
            $status = $_POST['status'];
            $sql = $data->insertManagerData($managerid,$name,$email,$number,$department,$status);
            if($sql)
            {
                header("location:http://localhost/Employeemanagementsystem/public/manager");
            }
        }
    }
    public function update()
    {

        $disp = new managerDetails();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET['updatedata'];
            $managerid = $_POST['managerid'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['phone'];
            $department = $_POST['department'];
            $status = $_POST['status'];
            //echo $number;
            $sql = $disp->updateManagerData($managerid,$id,$name,$email,$number,$department,"id");
            if($sql)
            {
                //$_SESSION['updatemessage'] = "Updated Successfully";
                header("location:http://localhost/Employeemanagementsystem/public/manager");        
            }
            echo "Not";
        }
    }
    
    public function delete()
    {
        $disp = new managerDetails();
        $id = $_GET['deletedata'];
        $sql = $disp->deleteManagerData($id,"id");
        if($sql)
        {
            header("location:http://localhost/Employeemanagementsystem/public/manager");
        }
        echo "Not";
              
    }
    public function insertProject()
    {
        $data = new managerDetails();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $project_id = $_POST['project_id'];
            $project_name = $_POST['project_name'];
            $project_startdate = $_POST['project_startdate'];
            $project_enddate = $_POST['project_enddate'];
            $completion_status = $_POST['completion_status'];
            $sql = $data->insertProjectData($project_id,$project_name,$project_startdate,$project_enddate,$completion_status);
            if($sql)
            {
                header("location:http://localhost/Employeemanagementsystem/public/projectpage");
            }
        }
    }
    public function projectupdate()
    {
        $data = new managerDetails();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET['updatedata'];
            $project_id = $_POST['project_id'];
            $project_name = $_POST['project_name'];
            $project_startdate = $_POST['project_startdate'];
            $project_enddate = $_POST['project_enddate'];
            $completion_status = $_POST['completion_status'];
            $sql = $data->updateProject($project_id,$project_name,$project_startdate,$project_enddate,$completion_status,$id);
            if($sql)
            {
                header("location:http://localhost/Employeemanagementsystem/public/projectpage");
            }
        }
    }
    public function projectdelete()
    {
        $disp = new managerDetails();
        $id = $_GET['deletedata'];
        $sql = $disp->deleteProject($id,"id");
        if($sql)
        {
            header("location:http://localhost/Employeemanagementsystem/public/projectpage");
        }
        echo "Not";
              
    }
}