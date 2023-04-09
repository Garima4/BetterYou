<?php
include "connection.php";
$app_id = $_REQUEST['q'];
$select = "select hp_id from appointment where app_id=$app_id";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View your replies</title>
    <?php include "headerfiles.html" ?>
</head>
<body>
<div class="container">
    <div class="boxed_wrapper">
        <?php include "patientheader.php" ?>
        <!-- case-section -->
        <section class="case-section">
            <div class="fluid-container">
                <div class="sec-title centred">
                    <i class="flaticon-brain-1"></i>
                    <h2>View Replies</h2>
                    <div class="inner-box">
                        <form action="update_reply.php" method="post">
                            <input type="hidden" name="app_id" value="<?php echo $app_id ?>"/>
                            <?php
                            $qselect = "select * from questions where hp_id=$row[0]";
                            $qres = mysqli_query($conn, $qselect);
                            if (mysqli_num_rows($qres)) {
                                while ($qrow = mysqli_fetch_array($qres)) {
                                    ?>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-info">Q. <?php echo $qrow[1] ?></div>
                                            <?php
                                            $reply = "select * from replies where question=$qrow[0] and patient='" . $_SESSION['patient'] . "'";
                                            //                                            echo $reply;
                                            $reply_res = mysqli_query($conn, $reply);
                                            $reply_row = mysqli_fetch_array($reply_res);
                                            ?>
                                            <textarea rows="4" name="reply<?php echo $qrow[0] ?>" class="form-control"
                                                      required
                                                      data-msg-required="Reply is required"><?php echo $reply_row['answer'] ?></textarea>
                                        </div>
                                    </div>
                                    <?php
                                } ?>
                                <div class="row">
                                    <div class="col-md-4 offset-md-8">
                                        <button type="submit" class="btn btn-primary pull-right">SUBMIT</button>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center mt-2">
                                        <?php
                                        if (isset($_REQUEST['e'])) {
                                            if ($_REQUEST['e'] == 1) {
                                                echo "<div class='alert alert-danger'>Replies already exists. Update your reply in view reply page</div>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            } else {
                                echo "No questions available";
                            }
                            ?>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <?php include "footer.html"; ?>
    </div>
    <?php include "footer_scripts.html"; ?>
</div>
</body>
</html>
