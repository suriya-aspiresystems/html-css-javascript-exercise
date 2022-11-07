<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1.0">
	<title>
		html css and bootstrap 4 simple landing page
	</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
    @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Quicksand&display=swap');
    *
    {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    nav
    {
        width: 100%;
        height: 75px;
        line-height: 75px;
        padding: 0px 100px;
        position: fixed;
        background-image: linear-gradient(#033747,#012733);
    }
    nav .logo p
    {
        font-size:30px;
        font-weight: bold;
        float:left;
        color:white;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        cursor: pointer;
    }
    nav ul
    {
        float: right;   
    }
    nav li
    {
        display: inline-block;
        list-style-type: none;
    }
    nav li a
    {
        font-size: 18px;
        text-transform: uppercase;
        padding: 0px 30px;
        color: white;
        text-decoration: none;
    }
    nav li a:hover
    {
        color: #ff8c69;
        transition: all 0.4s ease 0s;
    }
    .content-items img
    {
        width: 100%;
        height:100vh;
        background-size: cover;
        background-position: center;
    }
    .footer-area 
    {
        background-image: url('img/footer.jpg');
        background-size: cover;
        background-position: center;
        position: relative;
        z-index: 2;
        color: #fff;
        padding: 160px 0 80px;
        margin-top: -115px;
        z-index: -1;
   }
    .footer-area:before 
    {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background-color: #333;
        opacity: .9;
        z-index: -1;
    }

    .footer 
    {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .single-footer:nth-child(1) {
      flex-basis: 33%;
    }
    .single-footer h4 {
        text-transform: capitalize;
        font-size: 22px;
        position: relative;
        margin-bottom: 20px;
        padding-bottom: 10px;
    }
    .single-footer h4:before {
        content: "";
        position: absolute;
        width: 40px;
        height: 2px;
        background-color: #ff660e;
        bottom: 0;
    }
    .footer-social {
       margin-top: 20px;
    }
    .footer-social a {
        border: 1px solid #fff;
        width: 30px;
        height: 30px;
        display: inline-block;
        text-align: center;
        line-height: 30px;
        border-radius: 50%;
        margin-right: 10px;
    }
    .footer-social a:hover {
        background-color: #ff660e;
        border-color: #ff660e;
    }
    .single-footer ul li {
        /* text-transform: capitalize; */
        font-size: 17px;
        border-bottom: 1px dashed #4a4040;
        margin-bottom: 10px;
        padding-bottom: 10px;
    }
    .single-footer ul li:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
    }
    .single-footer ul li i {
        margin-right: 5px;
    }
    .single-footer ul li a:hover {
       color: #ff660e;
    }

    .footer-bottom-area {
        background-color: #333;
        padding: 20px 0;
        color: #fff;
    }
    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .copy p {
       text-transform: capitalize;
    }
    .footer-menu a {
        text-transform: capitalize;
        margin-left: 10px;
        transition: .3s;
    }
    .footer-menu a:hover {
       color: #ff660e;
    }
    @media only screen and (min-width:992px) and (max-width: 1200px) {
    .container{
        width: 970px;
    }
    }

    @media only screen and (min-width:768px) and (max-width: 991px) {
    .container{
        width: 750px;
    }
    .subscribe form {
        max-width: 600px;
    }
    .single-footer {
        flex-basis: 50%;
        margin-bottom: 30px;
    }
    }

    @media only screen and (max-width: 767px) {
    .container{
        width: 350px;
    }
    .subscribe form {
        max-width: 100%;
        margin: 0 20px;
    }
    .subscribe input[type="submit"] {
        position: static;
        width: 100%;
        margin-top: 15px;
    }
    .single-footer, .single-footer:nth-child(1){
        flex-basis: 100%;
        margin-bottom: 30px;
    }
    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column-reverse;
        text-align: center;
    }
    .footer-menu a {
        /* text-transform: capitalize; */
        margin-left: 7px;
        transition: .3s;
        font-size: 14px;
    }
    .copy p {
        text-transform: capitalize;
        margin-top: 15px;
    }
    }
    </style>
</head>
<body>
	<nav>
        <div class="logo">
            <p>EMPLOYEE MANAGEMENT SYSTEM</p>
        </div>
        <ul>
            <li><a href="#" id="home">HOME</a></li>
            <li><a href="#footer">ABOUT US</a></li>
            <li><a href="http://localhost/Employeemanagementsystem/public/login">LOGIN</a></li>
        </ul>
        <p class="text-center">Employee</p>
    </nav> 
    <div class="content-items">
        <img src="<?php "echo BASEURL";?>assets/images/mountain.jpg" alt="">
    </div>
    <footer class="footer-area" id="footer">
        <div class="container">
            <div class="footer">
                <div class="single-footer">
                    <h4>about us</h4>
                    <p>This is a Employee Management Portal Which enables us to store and retrieve Employee and Manager Resources.</p>
                    <div class="footer-social">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="single-footer">
                    <h4>quick links</h4>
                    <ul>
                        <li style="list-style-type: none;"><a href="#home"><i class="fa-solid fa-caret-right"></i> home</a></li>
                        <li  style="list-style-type: none;"><a href=""><i class="fa-solid fa-caret-right"></i> about</a></li>
                        <li style="list-style-type: none;"><a href="http://localhost/Employeemanagementsystem/public/login"><i class="fa-solid fa-caret-right"></i>Login</a></li>
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>opening hours</h4>
                    <ul>
                        <li style="list-style-type: none;"><i class="fa-solid fa-caret-right"></i> monday: 10.00 - 18.00</li>
                        <li style="list-style-type: none;"><i class="fa-solid fa-caret-right"></i> tuesday: 10.00 - 18.00</li>
                        <li style="list-style-type: none;"><i class="fa-solid fa-caret-right"></i> wednesday: 10.00 - 18.00</li>
                        <li style="list-style-type: none;"><i class="fa-solid fa-caret-right"></i> friday: 10.00 - 18.00</li>
                        <li style="list-style-type: none;"><i class="fa-solid fa-caret-right"></i> saturday: 10:00 - 14:00</li>
                        <li style="list-style-type: none;"><i class="fa-solid fa-caret-right"></i> sunday : closed Day</li>
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>contact us</h4>
                    <ul>
                        <li  style="list-style-type: none;"><a href=""><i class="fa-solid fa-location-dot"></i>Aspire Systems , SIPCOT ,Siruseri IT Park ,Chennai</a></li>
                        <li  style="list-style-type: none;"><a href="tel:+613 4589 1207"><i class="fa-solid fa-phone"></i> +91-7338718933</a></li>
                        <li  style="list-style-type: none;"><a href="milto:info@domainname.com"><i class="fa-solid fa-envelope"></i>suriya.sairam@aspiresys.com</a></li>
                        <li  style="list-style-type: none;"><a href=""><i class="fa-solid fa-globe"></i>www.Employeemanagmentsystem.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <section class="footer-bottom-area">
        <div class="container">
            <div class="footer-bottom">
                <div class="copy">
                    <p>&copy; 2022 all rights reserved.</p>
                </div>
                <div class="footer-menu">
                    <a href="">privacy policy</a>
                    <a href="">terms & conditions</a>
                    <a href="">disclaimer</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>