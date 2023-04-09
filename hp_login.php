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
                <h2>Help Provider Login</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <form action="hplogin_action.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="email">Email Id:</label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                       required data-msg-required="Email is required"/>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label for="pass">Password:</label>
                                                <input type="password" name="pass" id="pass" class="form-control"
                                                       required data-msg-required="Password is required"/>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-9">
                                                <?php
                                                if (isset($_REQUEST['e'])) {
                                                    echo "<div class='alert alert-danger'>Invalid Email or password</div>";
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-3 ">
                                                <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button>
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
