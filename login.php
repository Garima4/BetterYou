<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient/User Login</title>
    <?php include "headerfiles.html" ?>
</head>
<body>
<div class="boxed_wrapper">
    <?php include "publicheader.html" ?>
    <!-- case-section -->
    <section class="case-section">
        <div class="fluid-container">
            <div class="sec-title centred">
                <i class="flaticon-brain-1"></i>
                <h2>Patient/User Login</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <form action="login_action.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="email">Email Id:</label>
                                                <input type="email" name="email" id="email" class="form-control" required data-msg-required="Email is required"/>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label for="pass">Password:</label>
                                                <input type="password" name="pass" id="pass" class="form-control" required data-msg-required="Password is required"/>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <?php
                                                if(isset($_REQUEST['e'])){
                                                    echo "<div class='alert alert-danger'>Invalid Email or password</div>";
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-6 pull-right">
                                                <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pull-right">
                                                <span class="text-right">  Not yet registered, Signup <a href="signup.php">here</a> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- case-section end -->



    <?php include "footer.html"; ?>
</div>
<?php include "footer_scripts.html"; ?>
</body><!-- End of .page_wrapper -->
</html>
