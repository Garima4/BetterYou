<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient/User Signup</title>
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
                <h2>Patient/User Signup</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <form action="signup_action.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email">Email Id:</label>
                                        <input type="email" name="email" id="email" class="form-control" required data-msg-required="Email is required"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pass">Password:</label>
                                        <input type="password" name="pass" id="pass" class="form-control" required data-msg-required="Password is required"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="name">Patient Name:</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-msg-required="Name is required"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cno">Contact No.:</label>
                                        <input type="number" name="cno" id="cno" class="form-control" required data-msg-required="Contact No. is required"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="addr">Address:</label>
                                        <textarea name="address" id="address" class="form-control" required data-msg-required="Address is required"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bgroup">Select Blood Group:</label>
                                        <select name="bgroup" class="form-control" id="bgroup" required data-msg-required="Blood Group is required">
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 offset-md-9">
                                        <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button>
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
