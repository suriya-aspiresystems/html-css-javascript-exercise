<?php

class deleteproject extends Controller
{
    public function index()
    {
        $this->loadModel("managerDetails");
        $this->loadModel("managerallcrud");
        $this->view("manager/deleteproject");
    }
}