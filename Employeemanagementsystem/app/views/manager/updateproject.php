<?php
$id = $_GET['updatedata'];
$display = new  Managerallcrud();
$sql = $display->displayproject($id);
$row = mysqli_fetch_array($sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Project</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class ="container my-5">
        <h2>Update Project</h2>
        <form method ="POST">
            <div class="row mb-3 my-3">
                    <label for="projectname" class="col-sm-3 col-form-label">Project ID</label>
                    <div class="col-sm-6">
                        <input type="text" name="project_id" id="" class="form-control" value="<?php echo $row['project_id'];?>" placeholder="Enter your Project ID">
                    </div>
                </div>
            <div class="row mb-3 my-3">
                <label for="name" class="col-sm-3 col-form-label">Project Name</label>
                <div class="col-sm-6">
                    <input type="text" name="project_name" id="" class="form-control" value="<?php echo $row['project_name']; ?>" placeholder="Enter your Project Name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label">Project Start Date</label>
                <div class="col-sm-6">
                    <input type="date" name="project_startdate" id="" class="form-control" value="<?php echo $row['project_startdate']; ?>" placeholder="Enter Project Start Date">
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-3 col-form-label">Project End Date</label>
                <div class="col-sm-6">
                    <input type="text" name="project_enddate" id="" class="form-control" value="<?php echo $row['project_enddate']; ?>" placeholder="Enter Project End Date">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-3 col-form-label">Completion Status</label>
                <div class="col-sm-6">
                    <input type="text" name="completion_status" id="" class="form-control" value="<?php echo $row['completion_status']; ?>" placeholder="Enter Completion Status">
                </div>
            </div>
            <?php     ?>
          <div class = "row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">

                <button class="btn btn-primary" name="sub_btn">Update</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a href="http://localhost/Employeemanagementsystem/public/projectpage" class="btn btn-outline-primary" role="button">Cancel</a>
            </div>
          </div>
            
        </form>
		<?php
		  $insertData = new Managerallcrud();
		  $insertData->projectupdate();
		?>
    </div>
</body>
</html>