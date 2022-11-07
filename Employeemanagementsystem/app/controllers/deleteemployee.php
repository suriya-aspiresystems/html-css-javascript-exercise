<?php

class deleteemployee extends Controller
{
    public function index()
    {
        $this->loadModel("employeeDetails");
        $this->loadModel("employeeallcrud");
        $this->view("HR/deleteemployee");
    }
    
}