<?php
$id = $_GET['updatedata'];
$display = new employeeprofile();
$sql = $display->display($id);
$row = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/employeepage.css" />
    <title>Profile Page Update</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2"></i>EMS
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="http://localhost/Employeemanagementsystem/public/employeebasicinfo" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Basic/Personal Info
                  </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active">
                       <i class="fa fa-user" aria-hidden="true"></i>Educational History
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active">
                    <i class='fas fa-project-diagram'></i> Work Experience
                  </a>

                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Profile Page</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class ="container my-5">
                 <h2>Basic Info</h2>
                    <form method ="POST">
                        <div class="row mb-3 my-3">
                                <label for="employeeid" class="col-sm-3 col-form-label">Employee ID</label>
                                <div class="col-sm-6">
                                    <input type="text" name="employeeid" id="employeeid" class="form-control" value="<?php echo $row['employee_id']; ?>" placeholder="Enter the Employee ID">
                                </div>
                            </div>
                            <div class="row mb-3 my-3">
                                <label for="employeeid" class="col-sm-3 col-form-label">Employee Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="employeename" id="employeename" class="form-control" value="<?php echo $row['employee_name']; ?>" placeholder="Enter the Employee NAme">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" id="" class="form-control" value="<?php echo $row['employee_email']; ?>" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                                <div class="col-sm-6">
                                    <input type="tel" name="phone" id="" class="form-control" value="<?php echo $row['employee_phonenumber']; ?>" placeholder="Enter your Phone Number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control" value= "<?php echo $row['password'];?>" placeholder="Enter your Password">
                                    </div>
                                </label>
                            </div>
                            <div class="row mb-3">
                                <label for="confirmpassword" class="col-sm-3 col-form-label">Confirm Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="confirmpassword" class="form-control" value= "<?php echo $row['password'];?>" placeholder="Enter your password again">
                                    </div>
                                </label>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="address" value="<?php echo $row['address'];?>" class="form-control">
                                    </div>
                                </label>
                            </div>
                            <div class="row mb-3">
                                <label for="Gender" class="col-sm-3 col-form-label">Select your Gender</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'];?>">
                                    </div>
                                </label>
                            </div>
                            <div class="row mb-3">
                                <label for="dateofbirth" class="col-sm-3 col-form-label">Date Of Birth</label>
                                    <div class="col-sm-6">
                                        <input type="date" name="dateofbirth" id="" class="form-control" value="<?php echo $row['date_of_birth'];?>" placeholder="Enter your Date of Birth">
                                    </div>
                            </div>
                            <div class="row mb-3 my-3">
                                <label for="city" class="col-sm-3 col-form-label">Country</label>
                                <div class="col-sm-6">
                                    <input type="text" name="country" id="country" class="form-control" value="<?php echo $row['country'];?>" placeholder="Enter your Country">
                                </div>
                            </div>
                            <div class="row mb-3 my-3">
                                <label for="city" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-6">
                                    <input type="text" name="city" id="city" class="form-control" value="<?php echo $row['city'];?>" placeholder="Enter your City">
                                </div>
                            </div>
                            <div class="row mb-3 my-3">
                                <label for="Pincode" class="col-sm-3 col-form-label">Pincode</label>
                                <div class="col-sm-6">
                                    <input type="text" name="pincode" id="pincode" class="form-control" value="<?php echo $row['pincode'];?>" placeholder="Enter your Pincode">
                                </div>
                            </div>
                            <div class = "row mb-3">
                                <div class="offset-sm-3 col-sm-3 d-grid">
                                    <button class="btn btn-primary" name="sub_btn">Update</button>
                                </div>
                                <div class="col-sm-3 d-grid">
                                    <a href="#" class="btn btn-outline-primary" role="button">Cancel</a>
                                </div>
                            </div>
                        <?php     ?>
                    </form>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <?php
		  $updateData = new employeeprofileallcrud();
		  $updateData->update();
		?>
    </div>
</body>

</html>