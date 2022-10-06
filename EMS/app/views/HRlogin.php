<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HR Login Page</title>
    <link rel="stylesheet" href="/Employee_Management_System/public/assests/css/loginPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
  <body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
      <form class="border shadow p-3 rounded" style = "width:450px;" action = "" method = "POST">
      <h3 class = "text-center p-2">HR PANEL</h3>  
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $_POST['email']?>">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <span></span>
        <div class = "errorMessage" id = "emailerror"></div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" value = "<?php echo $_POST['password']?>"  name="password"> 
        </div>
        <span></span>
        <div class = "errorMessage" id = "passworderror"></div>
        <div class="mb-1">
        <label class = "form-label">Select User Type:</label>
        </div>
          <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="user_type">
            <option value="Employee">Employee</option>
            <option value="HR">HR</option>
            <option value="Manager">Manager</option>
          </select>
        <button type="submit" class="btn btn-primary my-3" id = "btn" name ="login_btn">Login</button>
      </form>
    </div>
    <script src="/EMS/public/assets/javascript/validate.js"></script>
  </body>
</html>

