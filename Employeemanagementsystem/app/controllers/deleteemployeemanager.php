<?php

class deleteemployeemanager extends Controller
{
    public function index()
    {
        $this->loadModel("manageremployeedetails");
        $this->loadModel("manageremployeeallcrud");
        $this->view("manager/deleteemployee");
    }
}