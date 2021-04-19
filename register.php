<?php

    include_once 'func/register.func.php';

    if (!isset($_SESSION['user']))
    {
    }
    else
    {
        header("location: account.php");
    }
?>
<!doctype html>
<html lang="en">
<head>

    <!-- Favicons -->
    <link href="assets/img/faviconlearnit.jpg" rel="icon">
    <link href="assets/img/learnit.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inloggen</title>

</head>

<body>

<!--HEADER-->
<header style="background-color: #37517e" id="header" class="fixed">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php">Learn IT</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Over Ons</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <!-- <li><a class="getstarted scrollto" href="#about">Account</a></li> -->
                <li class="nav-item dropdown" style="font-size: 30px;">
                    <a class="getstarted nav-link dropdown-toggle" href="#" id="AccountIcon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                    <div style="text-align: center; background-color: #6882af;" class="dropdown-menu" aria-labelledby="AccountIcon">
                        <a class="dropdown-item" id="NavBarTextDropDown" href="./login.php">Inloggen</a>
                        <a class="dropdown-item" id="NavBarTextDropDown" href="./register.php">Registeren</a>
                        <hr class="FooterLine " style="margin: 0 20%;">
                        <a class="dropdown-item" id="NavBarTextDropDown" href="func/logout.func.php">Uitloggen</a>
                    </div>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

<main>
    <br>
    <br>
    <form class="text-center p-5 col-md-4 offset-md-4 rounded position-relative animate__animated animate__flipInX" style="background-color: #e0e0e05c" action="register.php" method="post" enctype="multipart/form-data">
        <p class="FormText mb-4">Registeren</p>
        <br>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <input type="text" name="Username_Register" class="form-control" placeholder="Gebruikersnaam" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="email" name="Email_Register" class="form-control mb-4" placeholder="Email" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="password" name="Password_Register" class="form-control" placeholder="Wachtwoord" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="password" name="Password_Register2" class="form-control" placeholder="Wachtwoord Herhalen" required>
            </div>
        </div>
        <button class="btn btn-info my-4 btn-block col-md-8 offset-md-2" type="submit" name="Submit_Registeren">Registreren</button>
    </form>
</main>

<!--FOOTER-->
<footer class="fixed-bottom position-fixed" id="footer">

    <div style="background-color: #37517e" class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3 style="color: white">Learn IT</h3>
                    <p style="color: white">
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 style="color: white">Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 style="color: white">Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 style="color: white">Our Social Networks</h4>
                    <p style="color: white">Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Learn IT</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>