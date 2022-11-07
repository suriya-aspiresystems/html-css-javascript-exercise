<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/employeepage.css" />
    <title>Manager Work Experience</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2"></i>EMS
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Basic/Personal Info
                  </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active">
                       <i class="fa fa-user" aria-hidden="true"></i>Educational History
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active">
                    <i class='fas fa-project-diagram'></i> Work Experience
                  </a>

                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
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
                 <h2>Manager Work Experience</h2>
                    <form method ="POST">
                    <div class="row mb-3 my-3">
                            <label for="companyname1" class="col-sm-3 col-form-label">Company Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="companyname1" id="companyname1" class="form-control" value="" placeholder="Enter your Company Name">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="position" class="col-sm-3 col-form-label">Position</label>
                            <div class="col-sm-6">
                                <input type="text" name="position" id="position" class="form-control" value="" placeholder="Enter your Position">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="salary" class="col-sm-3 col-form-label">Salary</label>
                            <div class="col-sm-6">
                                <input type="text" name="salary" id="salary" class="form-control" value="" placeholder="Enter your Salary">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="location" class="col-sm-3 col-form-label">Company Location</label>
                            <div class="col-sm-6">
                                <input type="text" name="location" id="location" class="form-control" value="" placeholder="Enter your Company Location">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="portfolio" class="col-sm-3 col-form-label">Portfolio Website</label>
                            <div class="col-sm-6">
                                <input type="text" name="website" id="location" class="form-control" value="" placeholder="http://">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="relocate" class="col-sm-3 col-form-label">Are You Want to Relocate?</label>
                            <div class="col-sm-6">
                                <input type="radio" name="yes" id="yes" class="" value="">Yes
                                <input type="radio" name="no" id="no" class="" value=""> No
                                <input type="radio" name="notsure" id="notsure" class="" value=""> Not Sure
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
</body>

</html>