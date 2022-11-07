<?php

class employeebasicinfoupdate extends Controller
{
    public function index()
    {
        $this->loadModel("employeeprofile");
        $this->loadModel("employeeprofileallcrud");
        $this->view("employee/employeebasicinfoupdate");
    }
}