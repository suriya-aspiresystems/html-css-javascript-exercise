<?php


class updateemployee extends Controller
{
    function index()
    {
        $this->loadModel("employeeDetails");
        $this->loadModel("employeeallcrud");
        $this->view("HR/update");   
    }   
}
?>