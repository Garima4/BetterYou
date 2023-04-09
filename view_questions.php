<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Questions</title>
    <?php include "headerfiles.html" ?>
</head>
<body>
<div class="boxed_wrapper">
    <?php include "hp_header.php" ?>
    <!-- case-section -->
    <section class="case-section">
        <div class="fluid-container">
            <div class="sec-title centred">
                <i class="flaticon-brain-1"></i>
                <h2>My Questions</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <?php
                            include "connection.php";
                            $select = "select * from questions where hp_id=".$_SESSION['hp_id'];
                            //                            echo $select;
                            $res = mysqli_query($conn, $select);
                            if (mysqli_num_rows($res)) {
                                ?>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Control</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $srno = 0;
                                    while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                        <tr>
                                            <td><?php echo ++$srno ?></td>
                                            <td><?php echo $row['title'] ?></td>
                                            <td><?php echo date("d-M-Y",strtotime($row['date'])) ?></td>
                                            <td><a href="del_question.php?q=<?php echo $row['id'] ?>">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                                </a> </td>
                                        </tr>
                                        <?php
                                    } ?>
                                    </tbody>
                                </table>
                                <?php
                            } else {
                                ?>
                                <div class="alert alert-danger">No questions found</div>
                                <?php
                            }
                            ?>
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
                dateFormat: 'yy-mm-dd'
            });
        });

        function gethpdetails(did) {
            alert(did);
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
            } else {
                document.getElementById("hp").selectedIndex = 0;
                alert("Appointment date or Help Provider not selected");
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
                        // alert(this.response);
                        document.getElementById("availslot").innerHTML = "<div class='alert alert-success'>" + this.response + "</div>";
                        document.getElementById("bookform").reset();
                        document.getElementById("app_date").value = "";
                        document.getElementById("hp").selectedIndex = 0;
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
