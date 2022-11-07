<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?php "echo BASEURL";?>assets/css/employeepage.css" />
    <title>Manager Details</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>EMS</div>
            <div class="list-group list-group-flush my-3">
                <a href="http://localhost/Employeemanagementsystem/public/hrdashboard" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="http://localhost/Employeemanagementsystem/public/hrdetails" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active">
                    <i class="fa fa-user" aria-hidden="true"></i> Employee Resource</a>
                <a href="http://localhost/Employeemanagementsystem/public/manager" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active">
                    <i class="fa fa-building" aria-hidden="true"></i> Manager Resource
                 </a>
                <a href="http://localhost/Employeemanagementsystem/public/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                                <?php
                                   echo $_SESSION['hrname'];
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="http://localhost/Employeemanagementsystem/public/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
                <div class="container my-5">
                    <h3 class="text-center">Manager Details</h3>
                    <button class="btn btn-primary my-3"><a href="http://localhost/Employeemanagementsystem/public/addmanager" class="text-light" style="text-decoration:none;cursor:pointer;">Add Manager</a></button>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover" style="cursor: pointer;">
                            <thead>
                                <tr>
                                    <th scope="col" width="20">Manager ID</th>
                                    <th scope="col" width="20">Name</th>
                                    <th scope="col" width="20">Email</th>
                                    <th scope="col" width="20">Phone Number</th>
                                    <th scope="col" width="20">Department</th>
                                    <th scope="col" width="20">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $disp = new managerDetails();
                                $sql = $disp->display_managerdata();
                                $count = 1;
                                while($row = mysqli_fetch_array($sql)){
                                    ?>
                             <tr>
                                <td><?php echo $row['manager_id'];  ?></td>
                                <td><?php echo $row['managername'];  ?></td>
                                <td><?php echo $row['email'];  ?></td>
                                <td><?php echo $row['phone'];  ?></td>
                                <td><?php echo $row['department'];?></td>
                                <td>
                                <button class="btn btn-primary"><a href="updatemanager?updatedata=<?php echo $row['id']?>" class="text-light" style="text-decoration:none;cursor:pointer;">Update</a></button>
                                <button class="btn btn-danger"><a href="deletemanager?deletedata=<?php echo $row['id']; ?>" class="text-light" style="text-decoration:none;cursor:pointer;" onclick="return confirm('Are you sure want to delete this item')">Delete</a></button>
                                </td>
                            </tr>
                                <?php
                                    $count++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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