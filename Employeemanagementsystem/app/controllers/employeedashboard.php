<?php


class EmployeeDashboard extends Controller
{
    function index()
    {
        $this->loadModel("employeeDetails");
        $this->view("employee/employeedashboard");
    }
}


?>