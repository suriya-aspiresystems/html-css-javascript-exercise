<?php

require "/var/www/html/Employee_Management_System/app/models/loginModels.php";
class loginController extends Controllers
{
    public $model;
    
    public function __construct()
    {
        $this->models = new LoginModel();//basic instantiate of the models class
    }
    
    public function log()
    {
        $result = $this->models->getlogin();
        
        if ($result == 'login') {
            include '/var/www/html/Employee_Management_System/app/views/dashboard.php';
        } else {
            include '/var/www/html/Employee_Management_System/app/views/login.php';
        }
    }
}
?>
