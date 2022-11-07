<?php

class managerDetails extends Database
{
    public function insertManagerData($managerid,$name,$email,$number,$department,$status)
    {
        $insert = mysqli_query($this->connection,"INSERT INTO manager(manager_id,managername,email,phone,department,status) VALUES ('".$managerid."','".$name."','".$email."','".$number."','".$department."','".$status."')");
        return $insert;
    }
    public function display($id)
    {
        if(!empty($id))
        {
            $display = mysqli_query($this->connection,"SELECT * FROM manager where id ='$id'");
        }
        else
        {
            $display = mysqli_query($this->connection,"SELECT * FROM manager");
        }
        return $display;
    }
    public function updateManagerData($managerid,$id,$name,$email,$phone,$department,$status)
    {
        $update = $this->connection->query("UPDATE manager SET manager_id = '$managerid', managername = '$name' , email ='$email' , phone = '$phone' , department = '$department' , status = '$status' where id = '$id' ");
        return $update;
    }
    public function deleteManagerData($id,$Sno)
    {
        $delete = mysqli_query($this->connection,"update manager set status='Deactivate' where id='$id'");
        return $delete;
    }
    public function display_logindata($name)
    {
        $display_login = "SELECT * FROM manager where managername = '$name'";
        $result = mysqli_query($this->connection,$display_login);
        return $result;
    }
    public function countManager()
    {
        $sql = "Select id from manager ORDER BY id";
        $query_run = mysqli_query($this->connection,$sql);
        $row = mysqli_num_rows($query_run);
        return $row;
    }
    public function countEmployee()
    {
        $sql = "Select id from employee ORDER BY id";
        $query_run = mysqli_query($this->connection,$sql);
        $row = mysqli_num_rows($query_run);
        return $row;
    }
    public function display_managerdata()
    {
        $display_login = "SELECT * FROM manager where status='Active'";
        $result = mysqli_query($this->connection,$display_login);
        return $result;
    }
    public function insertProjectData($project_id,$project_name,$project_startdate,$project_enddate,$completion_status)
    {
        $insert = mysqli_query($this->connection,"INSERT INTO project_details(project_id,project_name,project_startdate,project_enddate,completion_status) VALUES ('".$project_id."','".$project_name."','".$project_startdate."','".$project_enddate."','".$completion_status."')");
        return $insert;
    }
    public function displayproject($id)
    {
        if(!empty($id))
        {
            $display = mysqli_query($this->connection,"SELECT * FROM project_details where id ='$id'");
        }
        else
        {
            $display = mysqli_query($this->connection,"SELECT * FROM project_details");
        }
        return $display;
    }
    public function updateProject($project_id,$project_name,$project_startdate,$project_enddate,$completion_status,$id)
    {
        $update = $this->connection->query("UPDATE project_details SET project_id = '$project_id',project_name = '$project_name' , project_startdate ='$project_startdate' , project_enddate = '$project_enddate' , completion_status = '$completion_status' where id = '$id' ");
        return $update;
    }
    public function deleteProject($id,$Sno)
    {
        $delete = mysqli_query($this->connection,"DELETE from project_details where $Sno = '$id'");
        return $delete;
    }
    public function display_projectdata()
    {
        $display_project = "SELECT * FROM project_details";
        $result = mysqli_query($this->connection,$display_project);
        return $result;
    }
    public function display_undomanagerdata()
    {
        $display_login = "SELECT * FROM manager where status='Deactivate'";
        $result = mysqli_query($this->connection,$display_login);
        return $result;
    }

}
