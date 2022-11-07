<?php

class employeebasicinfo extends Controller
{
    public function index()
    {
        $this->loadModel("employeeprofile");
        $this->view("employee/employeebasicinfo");
    }
}