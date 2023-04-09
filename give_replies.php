<?php
include "connection.php";
$app_id=$_REQUEST['q'];
$select="select hp_id from appointment where app_id=$app_id";
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "headerfiles.html"; ?>
    <title>Add Replies</title>
</head>
<body>
<?php include "patientheader.php"; ?>
<div class="container mt-5">
    <form action="replies_action.php" method="post">
        <div class="row">
            <div class="col-md-6 offset-md-3 ">
                <h1 class="text-center mb-3">Add Replies</h1>
                <input type="hidden" name="hp_id" value="<?php echo $app_id ?>"/>
                <?php
                $qselect="select * from questions where hp_id=$row[0]";
                $qres=mysqli_query($conn,$qselect);
                if(mysqli_num_rows($qres)){
                    while ($qrow=mysqli_fetch_array($qres)){
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="alert alert-info">Q. <?php echo $qrow[1] ?></div>
                            <textarea rows="4" name="reply<?php echo $qrow[0] ?>" class="form-control" required
                                      data-msg-required="Reply is required"></textarea>
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
                            if(isset($_REQUEST['e'])){
                                if($_REQUEST['e']==1){
                                    echo "<div class='alert alert-danger'>Replies already exists. Update your reply in view reply page</div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                else{
                  echo "No questions available";
                }
                ?>


            </div>
        </div>
    </form>
</div>
<?php include "footer.html" ?>
</body>
</html>
