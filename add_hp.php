<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Help Provider</title>
    <?php include "headerfiles.html" ?>
</head>
<body>
<div class="boxed_wrapper">
    <?php include "adminheader.php" ?>
    <!-- case-section -->
    <section class="case-section">
        <div class="fluid-container">
            <div class="sec-title centred">
                <i class="flaticon-brain-1"></i>
                <h2>Add new Help Provider</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <form action="hp_action.php" method="post">
                                <div class="row mb-2">
                                    <div class="col-md-6 ">
                                        <label for="email">Email Id:</label>
                                        <input type="email" name="email" id="email" class="form-control" required
                                               data-msg-required="Email is required"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Help Provider Name:</label>
                                        <input type="text" name="name" id="name" class="form-control" required
                                               data-msg-required="Name is required"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="cno">Contact No.:</label>
                                        <input type="text" name="cno" id="cno" class="form-control" required
                                               data-msg-required="Contact No. is required" data-rule-number="true" minlength="10"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Avail. Time (Start):</label>
                                        <input list="start" class="form-control" id="startime" name="startime"
                                                required data-msg-required="Start Time is required">
                                        <datalist id="start">
                                        <option value="">Select:</option>
                                            <?php
                                            for ($i = 1; $i <= 24; $i++) {
                                                if ($i <= 9) {
                                                    ?>
                                                    <option>0<?php echo $i ?></option>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <option><?php echo $i ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label>Avail. Time (End):</label>
                                        <input list="end" class="form-control" name="endtime" id="endtime" onchange="checkval(this.value)"
                                                required data-msg-required="End Time is required">
                                        <datalist id="end">
                                        <option value="">Select:</option>
                                            <?php
                                            for ($i = 1; $i <= 24; $i++) {
                                                if ($i <= 9) {
                                                    ?>
                                                    <option>0<?php echo $i ?></option>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <option><?php echo $i ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </datalist>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary mt-4 btn-lg">SUBMIT</button>
                                    </div>
                                </div>
                                <div class="row mt-2">

                                    <div class="col-md-6">
                                        <?php
                                        if (isset($_REQUEST['e'])) {
                                            if ($_REQUEST['e'] == 1) {
                                                echo "<span class='alert alert-success'>Help provider added successfully</span>";
                                            }
                                            elseif ($_REQUEST['e'] == 2) {
                                                echo "<span class='alert alert-danger'>Help provider already exists</span>";
                                            }
                                        }
                                        ?>
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
    <script>
        function checkval(endtime){
            var startime = document.getElementById("startime").value;
            if(startime >= endtime){
                 alert("Incorrect End time");
                document.getElementById("endtime").value ="";
            }
        }
    </script>


    <?php include "footer.html"; ?>
</div>
<?php include "footer_scripts.html"; ?>
</body><!-- End of .page_wrapper -->
</html>
