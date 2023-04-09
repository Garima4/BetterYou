<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
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
                <h2>Admin Login</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <form action="adminlogin_action.php" method="post">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="username">Username:</label>
                                                <input type="text" name="username" id="username" class="form-control" required data-msg-required="Username is required"/>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label for="pass">Password:</label>
                                                <input type="password" name="pass" id="pass" class="form-control" required data-msg-required="Password is required"/>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-7">
                                                <?php
                                                if(isset($_REQUEST['e'])){
                                                    echo "<div class='alert alert-danger'>Invalid Username or password</div>";
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-5 ">
                                                <button type="submit" class="btn btn-primary form-control btn-lg">SUBMIT</button>
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
