<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Appointments</title>
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
                <h2>My Appointments</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <?php
                            include "connection.php";
                            $select = "select * from appointment where pemail='" . $_SESSION['patient'] . "' order by app_date desc";
                            //                            echo $select;
                            $res = mysqli_query($conn, $select);
                            if (mysqli_num_rows($res)) {
                                ?>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Patient Name</th>
                                        <th>Contact No.</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Appointment Date</th>
                                        <th>Time Slot<br/>(24-Hour Format)</th>
                                        <th>Status</th>
                                        <th colspan="2">Replies</th>
                                        <th>Chat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $srno = 0;
                                    while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                        <tr class="text-center">
                                            <td><?php echo ++$srno ?></td>
                                            <td><?php echo $row[1] ?></td>
                                            <td><?php echo $row[2] ?></td>
                                            <td><?php echo $row[3] ?></td>
                                            <td><?php echo $row[4] ?></td>
                                            <td><?php echo date("d-M-Y",strtotime($row[5])) ?></td>
                                            <td><?php echo $row[6] ?></td>
                                            <td><?php echo ucwords($row[9]) ?></td>
                                            <td>
                                                <a href="give_replies.php?q=<?php echo $row[0] ?>">
                                                    <button class="btn btn-success"><i class="fa fa-reply"></i> </button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="view_replies.php?q=<?php echo $row[0] ?>">
                                                    <button class="btn btn-warning"><i class="fa fa-eye"></i> </button>
                                                </a>
                                            </td>

                                            <td>
                                                <?php
                                                if ($row[9] == "visited") {
                                                    if ($_SESSION['patient'] != null) {
                                                        ?>
                                                        <form action="chat.php" method="post">
                                                            <input type="hidden" name="f" value="user"/>
                                                            <input type="hidden" name="t" value="helprovider"/>
                                                            <?php
                                                            $hpselect="select email from help_provider where id=".$row['hp_id'];
                                                            $hpres=mysqli_query($conn,$hpselect);
                                                            $hprow=mysqli_fetch_array($hpres);
                                                            ?>
                                                            <input type="hidden" name="to" value="<?php echo $hprow[0] ?>"/>
                                                            <button type="submit" class="btn btn-primary"><i
                                                                        class="fa fa-user-md-chat"></i> Chat
                                                            </button>
                                                        </form>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <form action="chat.php" method="post">
                                                            <input type="hidden" name="f" value="user"/>
                                                            <input type="hidden" name="t" value="helprovider"/>
                                                            <button type="submit" class="btn btn-primary"><i
                                                                        class="fa fa-user-md-chat"></i> Chat
                                                            </button>
                                                        </form>
                                                        <?php
                                                    }
                                                    ?>


                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    } ?>
                                    </tbody>
                                </table>
                                <?php
                            } else {
                                ?>
                                <div class="alert alert-danger">No appointments booked till date</div>
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
