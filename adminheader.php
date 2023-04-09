<?php
session_start();
if(is_null($_SESSION['admin'])){
    header("location: adminlogin.php");
}
?>
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
                                <li class="current"><a href="admin_home.php">home</a></li>
                                <li class="dropdown"><a href="#">Manage Admins</a>
                                    <ul>
                                        <li>
                                            <a href="add_admin.php" >Add</a>
                                        </li>
                                        <li>
                                            <a href="view_admins.php">View</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="add_hp.php">Add new Help Provider</a></li>

                                <li class="dropdown"><a href="#">Settings</a>
                                    <ul>
                                        <li>
                                            <a href="achangepassword.php" >Change Password</a>
                                        </li>
                                        <li>
                                            <a href="logout.php?q=admin">Logout</a>
                                        </li>
                                    </ul>
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
<!-- main-header end -->
