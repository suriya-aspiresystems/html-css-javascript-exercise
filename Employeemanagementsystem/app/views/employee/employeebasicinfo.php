<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Basic Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
    body{
        margin: 0;
        padding: 0;
        font-family: montserrat;
        background: #e3e9f7;
    }
    nav ul{
        margin: 0;
        padding: 0;
        height: 100%;
        width: 260px;
        position:fixed;
        top:0;
        left:0;
        background-color: #2b2626;
    }
    nav ul li{
        list-style: none;
    }
    nav ul li a{
        display: block;
        font-family: montserrat;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 20px;
        color:#fff;
        position: relative;
        padding:25px 0 25px 25px;
    }
    nav ul li a:before{
        content:'';
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 100%;
        background: #e3e9f7;
        border-radius: 40px 0 0 40px;
        z-index: -1;
        transition: all 300ms ease-in-out;
    }
    nav ul li a:hover{
        color:#2b2626;
    }
    nav ul li a:hover::before{
        width: 95%;
    }
    .wrapper{
        margin-left: 260px;
    }
    .section{
        display: grid;
        place-items: center;
        min-height: 100vh;
        text-align: center;
    }
    .box-area h2{
        text-transform: uppercase;
        font-size: 50px;
    }
    .box-area{
        width:75%;
    }
    .logo{
        width: 150px;
        height: 150px;
        overflow: hidden;
        margin: 25px auto;
    }
    .logo img{
        width: 100%;
    }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="logo"><img src="/Employeemanagementsystem//public/assets/images/aspire.jpeg" alt=""></li>
            <li><a href="#"><i class="fa fa-home"></i>&nbsp;Personal Info</a></li>
            <li><a href="#"><i class="fa fa-book"></i>&nbsp; Educational Info</a></li>
            <li><a href="#"><i class="fa fa-users"></i>&nbsp; Work Experience</a></li>
        </ul>
    </nav>
    <div class="container my-5">
                    <h3 class="text-center">Employee Details</h3>
                    <button class="btn btn-primary my-3"><a href="http://localhost/Employeemanagementsystem/public/addemployee" class="text-light" style="text-decoration:none;cursor:pointer;">Add Employee</a></button>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover" style="cursor: pointer;">
                                <?php
                                $disp = new HRdata();
                                $sql = $disp->display_logindata();
                                $count =1;
                                while($row = mysqli_fetch_array($sql)){
                                    ?>
                            <tr>
                                <th scope="col">Employee ID</th>
                                <td><?php echo $row['employee_id'];  ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Employee Name</th>
                                <td><?php echo $row['employeename'];  ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Employee Email</th>
                                <td><?php echo $row['email'];  ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Employee Phone</th>
                                <td><?php echo $row['phone'];  ?></td>
                            <tr> 
                            <tr></tr>
                                <td><?php echo $row['designation'];?></td>
                                <td>
                                <button class="btn btn-primary"><a href="updateemployee?updatedata=<?php echo $row['id']?>" class="text-light" style="text-decoration:none;cursor:pointer;">Update</a></button>
                                <button class="btn btn-danger"><a href="deleteemployee?deletedata=<?php echo $row['id']; ?>" class="text-light" style="text-decoration:none;cursor:pointer;" onclick="return confirm('Are you sure want to delete this item')">Delete</a></button>
                               
                               </td>
                            </tr>
                                <?php
                                    $count++;
                                    }
                                ?>
                            </tbody>
                        </table>
                        <?php 
                            $disp = new HRdata();
                            $sql = $disp->pagination();
                         ?>
                        <?php 
                            $pageNo = new HRdetails();
                            $pageNo->pageNo();
                        ?>
                    </div>
                </div>
</body>
</html>