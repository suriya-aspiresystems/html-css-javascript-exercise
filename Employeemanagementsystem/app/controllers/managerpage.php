<?php

class managerpage extends Controller
{
    public function index()
    {
        $this->loadModel("HRdata");
        $this->view("manager/employeedetails");
    }
}