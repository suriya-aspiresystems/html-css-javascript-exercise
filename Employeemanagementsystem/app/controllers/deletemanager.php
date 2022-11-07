<?php

class deletemanager extends Controller
{
    function index()
    {
        $this->loadModel("managerDetails");
        $this->loadModel("managerallcrud");
        $this->view("HR/deletemanager");
    }
}