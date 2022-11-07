<?php

class updateproject extends Controller
{
    public function index()
    {
        $this->loadModel("managerDetails");
        $this->loadModel("managerallcrud");
        $this->view("manager/updateproject");
    }
}