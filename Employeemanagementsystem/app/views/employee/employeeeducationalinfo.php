<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/employeepage.css" />
    <title>Educational History</title>
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
                 <h2>Educational History</h2>
                    <form method ="POST">
                        <div class="row mb-3 my-3">
                            <label for="sslcschool" class="col-sm-3 col-form-label">SSLC School Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="sslcschool" id="sslcschool" class="form-control" value="" placeholder="Enter your SSLC School Name">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="sslcpercentage" class="col-sm-3 col-form-label">SSLC Percentage</label>
                                <div class="col-sm-6">
                                    <input type="text" name="sslcpercentage" id="sslcpercentage" class="form-control" value="" placeholder="Enter your SSLC percentage">
                                </div>
                        </div>
                            <div class="row mb-3 my-3">
                                <label for="sslcpassoutyear" class="col-sm-3 col-form-label">SSLC Passout Year</label>
                                <div class="col-sm-6">
                                    <input type="date" name="sslcpassoutyear" id="sslcpassoutyear" class="form-control" value="" placeholder="Enter your SSLC passout year">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="schooladdress" class="col-sm-3 col-form-label">Institute Address</label>
                                    <div class="col-sm-6">
                                        <textarea name="address" id="" cols="63" rows="3"></textarea>
                                    </div>
                                </label>
                            </div>
                            <div class="row mb-3 my-3">
                            <label for="hscschool" class="col-sm-3 col-form-label">HSC School Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="hscschool" id="hscschool" class="form-control" value="" placeholder="Enter your HSC School Name">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="hscpercentage" class="col-sm-3 col-form-label">HSC/Diploma Percentage</label>
                                <div class="col-sm-6">
                                    <input type="text" name="hscpercentage" id="sslcpercentage" class="form-control" value="" placeholder="Enter your HSC percentage">
                                </div>
                        </div>
                            <div class="row mb-3 my-3">
                                <label for="hscpassoutyear" class="col-sm-3 col-form-label">HSC Passout Year</label>
                                <div class="col-sm-6">
                                    <input type="date" name="hscpassoutyear" id="sslcpassoutyear" class="form-control" value="" placeholder="Enter your HSC passout year">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hscschooladdress" class="col-sm-3 col-form-label">Institute Address</label>
                                    <div class="col-sm-6">
                                        <textarea name="address" id="" cols="63" rows="3"></textarea>
                                    </div>
                                </label>
                            </div>
                            <div class="row mb-3 my-3">
                            <label for="ugcollegename" class="col-sm-3 col-form-label">UG College Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="ugcollege" id="ugcollege" class="form-control" value="" placeholder="Enter your UG College Name">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="ugcgpa" class="col-sm-3 col-form-label">UG CGPA</label>
                                <div class="col-sm-6">
                                    <input type="text" name="sslcpercentage" id="ugcgpa" class="form-control" value="" placeholder="Enter your UG CGPA">
                                </div>
                        </div>
                            <div class="row mb-3 my-3">
                                <label for="sslcpassoutyear" class="col-sm-3 col-form-label">UG Passout Year</label>
                                <div class="col-sm-6">
                                    <input type="date" name="sslcpassoutyear" id="ugpassoutyear" class="form-control" value="" placeholder="Enter your UG passout year">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ugcollegeaddress" class="col-sm-3 col-form-label">Institute Address</label>
                                    <div class="col-sm-6">
                                        <textarea name="address" id="" cols="63" rows="3"></textarea>
                                    </div>
                                </label>
                            </div>
                            <div class="row mb-3 my-3">
                            <label for="pgcollegename" class="col-sm-3 col-form-label">PG College Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="ugcollege" id="ugcollege" class="form-control" value="" placeholder="Enter your UG College Name">
                            </div>
                        </div>
                        <div class="row mb-3 my-3">
                            <label for="ugcgpa" class="col-sm-3 col-form-label">PG CGPA</label>
                                <div class="col-sm-6">
                                    <input type="text" name="pgpercentage" id="ugcgpa" class="form-control" value="" placeholder="Enter your PG CGPA">
                                </div>
                        </div>
                            <div class="row mb-3 my-3">
                                <label for="pgpassoutyear" class="col-sm-3 col-form-label">PG Passout Year</label>
                                <div class="col-sm-6">
                                    <input type="date" name="pgpassoutyear" id="pgpassoutyear" class="form-control" value="" placeholder="Enter your PG passout year">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pgcollegeaddress" class="col-sm-3 col-form-label">Institute Address</label>
                                    <div class="col-sm-6">
                                        <textarea name="address" id="" cols="63" rows="3"></textarea>
                                    </div>
                                </label>
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