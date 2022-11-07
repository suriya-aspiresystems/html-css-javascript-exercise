<?php

Class undoemployee extends Controller
{
    public function index()
    {
        $this->loadModel("HRdata");
        $this->view("HR/undoemployee");
    }
}