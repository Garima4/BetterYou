<?php
session_start();
if(is_null($_SESSION['patient'])){
    header("location:login.php");
}
?>
<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Mental Health</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav navbar-right">
            <li class="nav-item active">
                <a class="nav-link" href="patient_home.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Appointmnets</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="appointment.php">Book an appointment</a></li>
                    <li><a class="dropdown-item" href="">View</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Settings</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pchange_password.php">Change Password</a></li>
                    <li><a class="dropdown-item" href="logout.php?q=patient">Logout</a></li>
                </ul>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" >Welcome, <?php /*echo $_SESSION['patient'] */?></a>
            </li>
        </ul>
    </div>
</nav>-->
<header class="main-header style-one">
    <div class="header-upper">
        <div class="container">
            <div class="upper-inner clearfix">
                <div class="logo-box pull-left">
                    <img src="assets/images/favicon.ico"/> <h3 class="navbar-text text-uppercase font-weight-bolder"> Mental Health </h3>
                </div>
                <div class="header-info pull-right">
                    <ul class="info-list">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="menu-area pull-left clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="patient_home.php">home</a></li>
                                <li><a href="view_appointments.php">My Appointments</a></li>
                                <li class="dropdown"><a href="#">Settings</a>
                                    <ul>
                                        <li>
                                            <a href="pchange_password.php" >Change Password</a>
                                        </li>
                                        <li>
                                            <a href="logout.php?q=patient">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="current">
                                    <a >Welcome, <?php echo $_SESSION['patient'] ?></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="menu-area pull-left clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
