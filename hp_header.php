<?php
session_start();
if(is_null($_SESSION['helprovider'])){
    header("location: hp_login.php");
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
                                <li class="current"><a href="hp_home.php">home</a></li>
                                <li><a href="myappointments.php">My Appointments</a></li>
                                <li class="dropdown"><a href="">Questions</a>
                                    <ul>
                                        <li>
                                            <a href="add_questions.php" >Add</a>
                                        </li>
                                        <li>
                                            <a href="view_questions.php">View</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="">Settings</a>
                                    <ul>
                                        <li>
                                            <a href="hp_changepassword.php" >Change Password</a>
                                        </li>
                                        <li>
                                            <a href="logout.php?q=helpp">Logout</a>
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

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
