<?php
require_once "/var/www/html/Employeemanagementsystem/app/controllers/addemployee.php";
$validation = new addemployee();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
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
    </style>
</head>
<body>
    <div class ="container my-5">
        <h2>Add Employee</h2>
        <form method ="POST">
        <div class="row mb-3 my-3">
                <label for="employeeid" class="col-sm-3 col-form-label">Employee ID</label>
                <div class="col-sm-6">
                    <input type="text" name="employeeid" id="employeeid" class="form-control" value="" placeholder="Enter the Employee ID">
                </div>
            </div>
            <div class="row mb-3 my-3">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="" placeholder="Enter your name" onchange="userName()">
                </div>
            </div>
            <span class="error"><?php $validation->nameValid();?></span>
            <div class="errormessage" id = "nameerr"></div>
            <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" id="email" class="form-control" value="" placeholder="Enter your Email" onchange = "checkEmail()">
                </div>
            </div>
            <span class="error"><?php $validation->emailvalid();?></span>
            <div class="errormessage" id="emailerr"></div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-6">
                <input type="tel" name="phone" id="phone" class="form-control" value="" placeholder="Enter your Phone Number" onchange="checkPhone()">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label">Designation</label>
                <div class="col-sm-6">
                    <input type="text" name="designation" id="name" class="form-control" value="" placeholder="Enter your Designation" onchange = "checkEmail()">
                </div>
            </div>
            <span class="error"><?php $validation->namevalid();?></span>
            <div class="errormessage" id="nameerr"></div>
          <div class = "row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">

                <button class="btn btn-primary" name="sub_btn">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a href="http://localhost/Employeemanagementsystem/public/managerpage" class="btn btn-outline-primary" role="button">Cancel</a>
            </div>
          </div>
            
        </form>
		<?php
		  $insertData = new ManagerEmployeeallcrud();
		  $insertData->insert();
		?>
    </div>
    <script src="<?php "echo BASEURL";?>assets/javascript/validate.js"></script>
</body>
</html>