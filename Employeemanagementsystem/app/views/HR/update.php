<?php
$id = $_GET['updatedata'];
$display = new EmployeeDetails();
$sql = $display->display($id);
$row = mysqli_fetch_array($sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updatemployee</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class ="container my-5">
        <h2>Update Employee</h2>
        <form method ="POST">
        <div class="row mb-3 my-3">
                <label for="employeeid" class="col-sm-3 col-form-label">Employee ID</label>
                <div class="col-sm-6">
                    <input type="text" name="employeeid" id="employeeid" class="form-control" value="<?php echo $row['employee_id'];?>" placeholder="Enter the Employee ID">
                </div>
            </div>
            <div class="row mb-3 my-3">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $row['employeename']; ?>" placeholder="Enter your name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" id="" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Enter your Email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-6">
                    <input type="tel" name="phone" id="" class="form-control" value="<?php echo $row['phone']; ?>" placeholder="Enter your Phone Number">
                </div>
            </div>
            <div class="row mb-3">
                <label for="designation" class="col-sm-3 col-form-label">Designation</label>
                    <div class="col-sm-6">
                        <input type="text" name="designation" class="form-control" value= "<?php echo $row['designation']?>" placeholder="Enter your designation">
                    </div>
                </label>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-6">
                        <input type="text" name="status" class="form-control" value= "<?php echo $row['status']?>" placeholder="Enter your Status">
                    </div>
                </label>
            </div>
            <?php     ?>
          <div class = "row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">

                <button class="btn btn-primary" name="sub_btn">Update</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a href="http://localhost/Employeemanagementsystem/public/hrdetails" class="btn btn-outline-primary" role="button">Cancel</a>
            </div>
          </div>
            
        </form>
		<?php
		  $insertData = new Employeeallcrud();
		  $insertData->update();
		?>
    </div>
</body>
</html>