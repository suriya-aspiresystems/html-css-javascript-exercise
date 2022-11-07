<?php


class ManagerDashboard extends Controller
{
    function index()
    {
        $this->loadModel("managerDetails");
        $this->view("manager/managerdashboard");
    }
}
?>