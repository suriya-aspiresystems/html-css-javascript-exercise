<?php

class HRDashboard extends Controller
{
    function index()
    {
        $this->loadModel("HRdata");
        $this->view("HR/hrdashboard");
    }
}


?>