<?php

class log extends Controller
{
    public function index()
    {
        $this->loadModel("allLogin");
        $this->view("log");
       
    }
}