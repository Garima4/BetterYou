<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient/User Home</title>
    <?php include "headerfiles.html" ?>
</head>
<body>
<div class="boxed_wrapper">
    <?php include "patientheader.php" ?>
    <!-- case-section -->
    <section class="case-section">
        <div class="fluid-container">
            <div class="sec-title centred">
                <i class="flaticon-brain-1"></i>
                <h2>Book an Appointment</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <form id="bookform" role="form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Your Full Name:</label>
                                        <input type="text" name="pname" class="form-control" id="name"
                                               data-rule-required="true"
                                               data-msg-required="Patient Name is required">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <label>Your Phone No.</label>
                                        <input type="tel" class="form-control" name="phone" id="phone"
                                               data-msg-required="Phone No. is required"
                                               required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <label>Select your age:</label>
                                        <input list="age" name="age" required class="form-control"
                                               data-msg-required="Age is required">
                                        <datalist id="age">
                                            <option value="">Select:</option>
                                            <?php
                                            for ($i = 18; $i <= 100; $i++) {
                                                ?>
                                                <option><?php echo $i ?></option>
                                            <?php } ?>
                                        </datalist>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <label>Select Gender:</label> <br>
                                        <input type="radio" name="gender" value="Male" id="male"> <label
                                                for="male">Male</label>
                                        <input type="radio" name="gender" value="Female" id="female"> <label
                                                for="female">Female</label>
                                        <input type="radio" name="gender" value="Others" id="others"> <label
                                                for="others">Others</label>
                                    </div>
                                    <div class="col-md-6 form-group mt-3">
                                        <label>Select Appointment Date:</label>
                                        <input type="text" name="date" id="app_date" class="form-control datepicker"
                                               required data-msg-required="Appointment Date is required">
                                    </div>
                                    <div class="col-md-6 form-group mt-3">
                                        <label for="hp">Select Help Provider:</label>
                                        <select class="form-control" id="hp" name="hp" data-msg-required="Help Provider is required"
                                                onchange="gethpdetails(this.value)" required>
                                                                      <option value="">Select:</option>
                                            <?php
                                            include "connection.php";
                                            $select = "select * from help_provider";
                                            $res = mysqli_query($conn, $select);
                                            while ($row = mysqli_fetch_array($res)) {
                                                ?>
                                                <option value="<?php echo $row[0] ?>"><?php echo $row['name'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mt-3">
                                        <div id="availslot"></div>
                                    </div>
                                    <div class="col-md-6 form-group mt-3">
                                        <input type="hidden" id="availslottext" name="availslot"/>
                                        <button type="button" onclick="bookappointment()" class="btn btn-primary">
                                            SUBMIT
                                        </button>
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
    <link rel="stylesheet" href="jquery-ui.css">
    <script src="assets/js/jquery.js"></script>
    <script src="jquery-ui.js"></script>
    <!--    <script src="assets/js/popper.min.js"></script>-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--    <script src="assets/js/owl.js"></script>-->
    <!--    <script src="assets/js/wow.js"></script>-->
    <!--    <script src="assets/js/validation.js"></script>-->
    <!--    <script src="assets/js/jquery.fancybox.js"></script>-->
    <!--    <script src="assets/js/appear.js"></script>-->
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <!--    <script src="assets/js/jquery.nice-select.min.js"></script>-->
    <!-- main-js -->
    <!--    <script src="assets/js/script.js"></script>-->
    <script>
        $(function () {
            $("#app_date").datepicker({
                minDate: +1,
                dateFormat: 'dd-mm-yy'
            });
        });

        function gethpdetails(did) {
            //alert(did);
            var app_date = document.getElementById("app_date").value;
            if (app_date != "" && did != "") {
                var http = new XMLHttpRequest();
                http.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        // alert(this.response);
                        document.getElementById("availslottext").value = this.response;
                        document.getElementById("availslot").innerHTML = "<span>Available slot is : " + this.response + " (24-Hour Format)</span>"
                    }
                }
                http.open("get", "getimeslot.php?q=" + did + "&dt=" + app_date, true);
                http.send();
            } else if(app_date == "") {
                document.getElementById("dt").focus();
                alert("Appointment date is not selected");
            }
            else{
                document.getElementById("hp").focus();
                alert("Appointment date is not selected");
            }
        }

        function bookappointment() {
            $("#bookform").validate();
            if ($("#bookform").valid()) {
                var controls = document.getElementById("bookform").elements;
                var formdata = new FormData();
                //alert(controls.length);
                for (let i = 0; i < controls.length; i++) {
                    if (controls[i].type != "button") {
                        formdata.append(controls[i].name, controls[i].value);
                    }
                }
                //console.log(formdata);
                var http = new XMLHttpRequest();
                http.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.response != "exists") {
                            // alert(this.response);
                            document.getElementById("availslot").innerHTML = "<div class='alert alert-success'>" + this.response + "</div>";
                            document.getElementById("bookform").reset();
                            document.getElementById("app_date").value = "";
                            document.getElementById("hp").selectedIndex = 0;
                        } else {
                            alert("Your booking is already done.");
                            document.getElementById("bookform").reset();
                            document.getElementById("availslot").innerHTML ="";
                            document.getElementById("hp").selectedIndex = 0;


                        }
                    }
                }
                http.open("post", "bookappointment.php", true);
                http.send(formdata);

            }
        }
    </script>

    <?php include "footer.html"; ?>
</div>
<?php include "footer_scripts.html"; ?>

</body>
</html>
