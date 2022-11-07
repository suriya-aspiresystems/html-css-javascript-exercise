<?php
require_once "/var/www/html/Employeemanagementsystem/app/controllers/login.php";
$validation = new login();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<style>
        .errormessage
        {
            margin-left: 200px;
            text-align: center;
            padding: 2px;
            color: red;
            font-style: bold;
        }
        .error { color: red;}
        body
        {
          background-image: url('/Employeemanagementsystem/public/assets/images/asp.jpg');
          background-size: 100%;
          background-position:right; 
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          /* background-attachment: fixed; */
          background-repeat: no-repeat;
        }
    </style>
</head>
  <body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;"> 
      <form class="border shadow p-3 rounded" style = "width:450px;"  method = "POST">
        <h3 class = "text-center p-2">EMPLOYEE LOGIN</h3>  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <span><?php $validation->emailValid();?></span>
          <div class="errormessage" id="emailerr"></div>
          <div class="mb-1">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value = "" > 
            <input type="checkbox" onclick="PasswordVisbility()"> Show Password
          </div>
          <span><?php $validation->passwordValid();?></span>
          <div class = "errorMessage" id = "passworderror"></div>
          <button class="btn btn-primary my-3" id = "btn" name ="login_btn">Login</button>
      </form>
    </div>
    <script>
      function PasswordVisbility()
      {
        var password = document.getElementById("password");
        
        if(password.type=="password")
        {
            password.type = "text";
        }
        else{
          password.type = "password";
        }
      }
    </script>
  </body>
  
</html>
<?php
require_once "/var/www/html/Employeemanagementsystem/app/models/allLogin.php";
$login = new AllLogin();
$login->employeeLogin();
$login->HRLogin();
$login->managerLogin();
?>