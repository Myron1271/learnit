    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php">Learn IT</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Over Ons</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li class="nav-item dropdown" style="font-size: 30px;">
                    <a class="getstarted nav-link dropdown-toggle" href="#" id="AccountIcon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                    <div style="text-align: center; background-color: #6882af;" class="dropdown-menu" aria-labelledby="AccountIcon">
                        <a class="dropdown-item" id="NavBarTextDropDown" href="./login.php">Inloggen</a>
                        <a class="dropdown-item" id="NavBarTextDropDown" href="./register.php">Registeren</a>
                        <hr class="FooterLine " style="margin: 0 20%;">
                        <a class="dropdown-item" id="NavBarTextDropDown" href="func/logout.func.php">Uitloggen</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="AccountName" href="./account.php"></a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <script type="text/javascript">
            var AccountName = '<?php echo $_SESSION['user'];?>';
            document.getElementById('AccountName').innerHTML= AccountName;
        </script>
    </div>
</header>
