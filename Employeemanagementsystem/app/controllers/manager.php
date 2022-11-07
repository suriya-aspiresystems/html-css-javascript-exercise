<?php

class manager extends Controller
{
    function index()
    {
        $this->loadModel("managerDetails");
        $this->view("HR/managerdetails");
    }
}