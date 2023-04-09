<!doctype html>
<html lang="en">
<head>
    <?php include "headerfiles.html"; ?>
    <title>My Appointments</title>
</head>
<body>
<?php include "hp_header.php"; ?>
<div class="container">
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content_block_1">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2 class="text-center">My Appointments</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 case-block">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <?php
                            include "connection.php";
                            $select = "select * from appointment where hp_id=" . $_SESSION['hp_id'] . " order by app_id desc";
                            //echo $select;
                            $res = mysqli_query($conn, $select);
                            if (mysqli_num_rows($res)) {
                                ?>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Patient Name</th>
                                        <th>Contact No.</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Date</th>
                                        <th>Time Slot</th>
                                        <th>Email Id</th>
                                        <th>Controls</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $srno = 0;
                                    while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                        <tr>
                                            <td><?php echo ++$srno; ?></td>
                                            <td><?php echo $row[1] ?></td>
                                            <td><?php echo $row[2] ?></td>
                                            <td><?php echo $row[3] ?></td>
                                            <td><?php echo $row[4] ?></td>
                                            <td><?php echo date('d-M-Y', strtotime($row[5])); ?></td>
                                            <td><?php echo $row[6] ?></td>
                                            <td><?php echo $row[8] ?></td>
                                            <td>
                                                <?php
                                                if ($row[9] == "booked") {
                                                    ?>
                                                    <a href="update_status.php?q=<?php echo $row[0] ?>">
                                                        <button class="btn btn-warning">Update Status</button>
                                                    </a>
                                                    <?php
                                                }
                                                if ($row[9] == "visited") {
                                                    if ($_SESSION['helprovider'] != null) {
                                                        ?>
                                                        <form action="chat.php" method="post">
                                                            <input type="hidden" name="f" value="helprovider"/>
                                                            <input type="hidden" name="t" value="user"/>
                                                            <input type="hidden" name="to" value="<?php echo $row['pemail'] ?>"/>
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
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <?php
                            } else {
                                echo "<div class='alert alert-danger'>No appointments for today.</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include "footer.html" ?>
</body>
</html>